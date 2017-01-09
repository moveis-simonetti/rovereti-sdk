<?php
namespace Simonetti\Rovereti;

use GuzzleHttp\Client as GuzzleClient;

/**
 * Class AbstractSendRequest
 * @package Simonetti\Rovereti
 */
class AbstractSendRequest
{
    const BASE_URI = 'http://appservice.rovereti.com.br/Api/';

    /**
     * @var Client
     */
    protected $client;

    /**
     * AbstractSendRequest constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $uri
     * @param array $data
     * @return Response
     */
    protected function send(string $uri, array $data)
    {
        return $this->client->post($uri, $data);
    }
}