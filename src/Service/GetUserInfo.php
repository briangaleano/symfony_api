<?php

namespace App\Service;

use App\Models\ReturnUserInfo;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

class GetUserInfo{

    private $endpoint;
    
    public function __construct( 
    private HttpClientInterface $client,
    #[Autowire('%env(API_USER)%')] string $UrlUserInfo)
    {
        $this->endpoint = $UrlUserInfo;
    }

    public function getUserData(){

        $response = $this->client->request(
            'GET',
            "{$this->endpoint}?limit=10",
        );

        if($response->getContent() != null){
            $content = $response->getContent();
            // $content = '{"id":521583, "name":"symfony-docs", ...}'
            $responseArray = $response->toArray();

            $info = new ReturnUserInfo($responseArray, $content);

            return $info;
        }else{
            return null;
        }
    }
}
