<?php

// src/Service/CsvGenerator.php
namespace App\Service;

use League\Csv\Writer;
use SplTempFileObject;

class CsvGenerator
{
    public function generateCsv(array $data): string
    {
        // Create a temporary file
        $csv = Writer::createFromFileObject(new SplTempFileObject());
        
        // Insert the records
        foreach ($data as $record) {
            $csv->insertOne($record);
        }
        // Save the file to a specific path
        $filePath = '/Users/briangaleano/Documents/GitHub/Telus/symfony_api/src/Files/file.csv';
        file_put_contents($filePath, $csv->getContent());

        return $filePath;
    }
}
