<?php

namespace App\MessageHandler;


use App\Message\GetInfo;
use App\Repository\SummaryRepository;
use App\Service\EtlData;
use App\Service\SaveInfoDB;
use App\Service\GetUserInfo;
use Psr\Log\LoggerInterface;
use App\Service\CsvGenerator;
use App\Service\SftpUploader;
use App\Service\JsonGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

#[AsMessageHandler]
final class GetInfoHandler
{
    private $etlData;
    private $getUserInfo;
    private $responseArray;
    private $sftpUploader;
    private $flattenedDataS = [];
    private $saveInfoDBS;
    private $summaryRepository;

    public function __construct(private LoggerInterface $logger,  
    private HttpClientInterface $client,
    private EtlData $etlDataService,
    private GetUserInfo $getUserInfoService,
    private CsvGenerator $csvGenerator,
    private SftpUploader $sftpUploaderService,
    private JsonGenerator $jsonGenerator,
    private SaveInfoDB $saveInfoDBService,
    SummaryRepository $summaryRepository)
    {
        $this->etlData = $etlDataService;
        $this->getUserInfo = $getUserInfoService;
        $this->sftpUploader = $sftpUploaderService;
        $this->saveInfoDBS = $saveInfoDBService;
        $this->summaryRepository = $summaryRepository;
    }
    public function __invoke(GetInfo $message)
    {
        $this->flattenedDataS = [];
       $date = date("Ymd");
       $responseInfo = $this->getUserInfo->getUserData();
       
        if($responseInfo != null){
            foreach ($responseInfo->getArray()['users'] as $key => $value) {
                    $flattened = [];
                    $flattened = $this->flattenData($value);
                    array_push($this->flattenedDataS, $flattened );
            }

            $headersEtl = array_keys($this->flattenedDataS[0]);
            $dataCsv = $this->etlData->transforData($responseInfo->getArray());
            $csvFilePath = $this->csvGenerator->generateCsv($dataCsv);
            $jsonFilePath = $this->jsonGenerator->jsonGenerator($responseInfo->getArray());
            $etlFilePath = $this->csvGenerator->generateEtlCsv($this->flattenedDataS, $headersEtl);

            $this->sftpUploader->uploadFile($etlFilePath, "etl_$date.csv");
            $this->sftpUploader->uploadFile($jsonFilePath, "data_$date.json");
            $this->sftpUploader->uploadFile($csvFilePath, "summary_$date.csv");

            $summaryinfo = $this->saveInfoDBS->saveInfoSummary("$csvFilePath/summary_$date.csv", "$etlFilePath/etl_$date.csv");
            
            $summary = $this->summaryRepository->find($summaryinfo->getId());

            if (!$summary) {
                return new Response('Category not found', Response::HTTP_NOT_FOUND);
            }


            $this->saveInfoDBS->saveInfoEtl($this->flattenedDataS, $summary);
        }
        
    }

    function flattenData($data, $prefix = '') {
        $result = [];
    
        foreach ($data as $key => $value) {
            $newKey = $prefix . (empty($prefix) ? '' : '_') . $key;
    
            if (is_array($value)) {
                $result = array_merge($result, $this->flattenData($value, $newKey));
            } elseif (is_object($value)) {
                $objectVars = get_object_vars($value);
                $result = array_merge($result, $this->flattenData($objectVars, $newKey));
            } else {
                $result[$newKey] = $value;
            }   
        }
        return $result;
    }
    
}
