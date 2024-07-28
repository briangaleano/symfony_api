<?php

// src/Service/CsvGenerator.php
namespace App\Service;

use League\Csv\Writer;
use SplTempFileObject;

class JsonGenerator
{
    public function jsonGenerator(array $data): string
    {
    
         // Save the file to a specific path
         $filePath = '/Users/briangaleano/Documents/GitHub/Telus/symfony_api/src/Files/file.json';
        
        $jsonData = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($filePath, $jsonData);
        
        echo "JSON file created successfully.";

        return $filePath;
    }
}