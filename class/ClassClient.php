<?php
namespace Classes;

class ClassClient
{
    private $http;
    private $client;

    #Get Client
    public function getClient()
    {
        $this->http=new \GuzzleHttp\Client(["verify"=>false]);
        $this->client = new \Google_Client();
        $this->client->setHttpClient($this->http);
        $this->client->setApplicationName('Google Forms API');
        $this->client->setScopes(\Google_Service_Drive::DRIVE);
        $this->client->setAuthConfig('../lib/credentials.json');
        $this->client->setAccessType('offline');
        return $this->client;
    }
}