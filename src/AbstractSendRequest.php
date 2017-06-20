<?php

namespace Simonetti\Rovereti;

use GuzzleHttp\Client as GuzzleClient;

/**
 * Class AbstractSendRequest
 * @package Simonetti\Rovereti
 */
abstract class AbstractSendRequest
{
    const BASE_URI = 'http://appservice.rovereti.com.br/Api/';

    const POST_METHOD = Client::POST_METHOD;
    const GET_METHOD = Client::GET_METHOD;

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
     * @param string $method
     * @param string $uri
     * @param array|null $data
     * @return Response
     * @throws \Exception
     */
    protected function send(string $method, string $uri, array $data = [])
    {
        return $this->client->send($method, $uri, $data);
    }
}