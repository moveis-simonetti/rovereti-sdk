<?php

namespace Simonetti\Rovereti;

use GuzzleHttp\Client as GuzzleClient;

/**
 * Class Client
 * @package Simonetti\Rovereti
 */
class Client
{
    const GET_METHOD = 'GET';
    const POST_METHOD = 'POST';

    /**
     * Guzzle para fazer a requisição
     * @var GuzzleClient
     */
    protected $guzzleClient;

    /**
     * Chave de acesso aos serviços da Rovereti
     * @var Token
     */
    protected $token;

    /**
     * Client constructor.
     * @param GuzzleClient $guzzleClient
     * @param Token $token
     */
    public function __construct(GuzzleClient $guzzleClient, Token $token)
    {
        $this->guzzleClient = $guzzleClient;
        $this->token = $token;
    }

    /**
     * @param string $method
     * @return bool
     */
    private function isValidMethod(string $method)
    {
        return in_array($method, [self::GET_METHOD, self::POST_METHOD]);
    }

    /**
     * @param string $method
     * @param string $uri
     * @throws \Exception
     */
    private function validateParams(string $method, string $uri)
    {
        if (!$this->isValidMethod($method)) {
            throw new \Exception("Método Inválido!");
        }
        if (empty($uri)) {
            throw new \Exception("URI não informada.");
        }
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $data
     */
    private function setIdentificationParams(string $method, string &$uri, array &$data)
    {
        $idData = [
            'DscIdentificacaoUsuario' => $this->token->getUser(),
            'Key' => $this->token->getKey(),
            'Token' => $this->token->getToken()
        ];

        if (self::POST_METHOD == $method) {
            $data = array_merge($data, $idData);
            return;
        }

        if (self::GET_METHOD == $method) {
            $uri .= "/" . implode("/", $idData);
        }
    }

    /**
     * @param array $data
     * @return array
     */
    private function prepareData(array &$data)
    {
        if (empty($data)) {
            return;
        }

        $data = [
            'form_params' => $data,
        ];
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $data
     * @return Response
     * @throws \Exception
     */
    public function send(string $method, string $uri, array $data = []): Response
    {
        $this->validateParams($method, $uri);
        $this->setIdentificationParams($method, $uri, $data);
        $this->prepareData($data);

        return new Response(
            $this->guzzleClient->request($method, $uri, $data)
        );
    }

    /**
     * @param string $uri
     * @param array $data
     * @return Response
     */
    public function post(string $uri, array $data): Response
    {
        return $this->send(self::POST_METHOD, $uri, $data);
    }

    /**
     * @param string $uri
     * @return Response
     */
    public function get(string $uri)
    {
        return $this->send(self::GET_METHOD, $uri);
    }
}