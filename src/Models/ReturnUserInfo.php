<?php

namespace App\Models;

class ReturnUserInfo
{
    private $array;
    private $json;

    public function __construct($array, $json)
    {
        $this->array = $array;
        $this->json = $json;

    }

    public function getArray(){
        return $this->array;
    }

    public function setArray(array $array){
        $this->array = $array;
    }

    public function getJson(){
        return $this->json;
    }

    public function setJson(string $json){
        $this->json = $json;
    }
}
