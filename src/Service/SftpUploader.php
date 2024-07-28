<?php

namespace App\Service;

use phpseclib3\Net\SFTP;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

class SftpUploader
{
    private $sftp;
    private $endpoint;

    public function __construct(string $host, string $port, string $username, string $password,#[Autowire('%env(PATH_SFTP)%')] string $path_sft)
    {
        $this->sftp = new SFTP($host, $port);
        if (!$this->sftp->login($username, $password)) {
            throw new \Exception('Login failed');
        }

        $this->endpoint = $path_sft;
    }

    public function uploadFile(string $localFilePath, string $name): bool
    {
        dump($this->endpoint);
        return $this->sftp->put("$this->endpoint/$name", $localFilePath, SFTP::SOURCE_LOCAL_FILE);
    }
}
