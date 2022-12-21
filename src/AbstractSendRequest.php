<?php

namespace Simonetti\Rovereti;

/**
 * Class AbstractSendRequest
 * @package Simonetti\Rovereti
 */
abstract class AbstractSendRequest
{
    public const BASE_URI = 'http://appservice.rovereti.com.br/Api/';

    public const POST_METHOD = Client::POST_METHOD;
    public const GET_METHOD = Client::GET_METHOD;

    /**
     * @var Client
     */
    protected $client;

    /**
     * AbstractSendRequest constructor.
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param array|null $data
     * @throws \Exception
     */
    protected function send(string $method, string $uri, array $data = []): Response
    {
        return $this->client->send($method, $uri, $data);
    }
}
