<?php

namespace App\MessageHandler;

use App\Message\GetInfo;
use App\Service\CsvGenerator;
use App\Service\EtlData;
use App\Service\GetUserInfo;
use App\Service\JsonGenerator;
use App\Service\SftpUploader;
use Psr\Log\LoggerInterface;
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
    
    
    public function __construct(private LoggerInterface $logger,  
    private HttpClientInterface $client,
    private EtlData $etlDataService,
    private GetUserInfo $getUserInfoService,
    private CsvGenerator $csvGenerator,
    private SftpUploader $sftpUploaderService,
    private JsonGenerator $jsonGenerator)
    {
        $this->etlData = $etlDataService;
        $this->getUserInfo = $getUserInfoService;
        $this->sftpUploader = $sftpUploaderService;
    }
    public function __invoke(GetInfo $message)
    {
       $date = date("Ymd");
       $responseInfo = $this->getUserInfo->getUserData();
       $dataCsv = $this->etlData->transforData($responseInfo->getArray());
       $csvFilePath = $this->csvGenerator->generateCsv($dataCsv);
       $jsonFilePath = $this->jsonGenerator->jsonGenerator($responseInfo->getArray());
       $this->sftpUploader->uploadFile($jsonFilePath, "data_$date.json");
       $this->sftpUploader->uploadFile($csvFilePath, "summary_$date.csv");

       //dump($responseInfo->getArray());
       //$this->etlData->transforData($responseArray);
        
    }
}
