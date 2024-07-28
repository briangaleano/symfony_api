<?php

namespace App\Controller;

use App\Service\CsvGenerator;
use App\Service\SftpUploader;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UploadController extends AbstractController
{
    private $csvGenerator;
    private $sftpUploader;

    public function __construct(CsvGenerator $csvGenerator, SftpUploader $sftpUploader)
    {
        $this->csvGenerator = $csvGenerator;
        $this->sftpUploader = $sftpUploader;
    }

    /**
     * @Route("/upload-csv", name="upload_csv")
     */
    public function uploadCsv(): Response
    {
        // Example data to be written to CSV
        $data = [
            ['row1_col1', 'row1_col2', 'row1_col3'],
            ['row2_col1', 'row2_col2', 'row2_col3'],
        ];

        // Generate the CSV
        $filePath = $this->csvGenerator->generateCsv($data);

        // Upload the CSV via SFTP
        $remoteFilePath = '/remote/path/to/file.csv';
        $uploadSuccess = $this->sftpUploader->uploadFile($filePath, $remoteFilePath);

        return new Response($uploadSuccess ? 'Upload successful' : 'Upload failed');
    }
    
}
