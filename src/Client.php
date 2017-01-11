<?php
namespace Simonetti\Rovereti;

use GuzzleHttp\Client as GuzzleClient;
use stdClass;

/**
 * Class Client
 * @package Simonetti\Rovereti
 */
class Client
{
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
     * @param string $uri
     * @param array $data
     * @return Response
     * @throws \Exception
     */
    public function post(string $uri, array $data): Response
    {
        if (empty($uri)) {
            throw new \Exception("URI não informada.");
        }

        $data['token'] = $this->token->getToken();

        $response = $this->guzzleClient->request('POST', $uri, [
            'form_params' => $data,
        ]);

        return new Response($response);
    }
}