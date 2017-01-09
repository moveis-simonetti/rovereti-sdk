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
     * @var GuzzleClient
     */
    protected $guzzleClient;

    /**
     * Client constructor.
     * @param GuzzleClient $guzzleClient
     */
    public function __construct(GuzzleClient $guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
    }

    /**
     * @param string $uri
     * @param stdClass $data
     * @return Response
     * @throws \Exception
     */
    public function post(string $uri, stdClass $data): Response
    {
        if (empty($uri)) {
            throw new \Exception("URI não informada.");
        }

        $response = $this->guzzleClient->request('POST', $uri, [
            'form_params' => (array)$data,
        ]);

        return new Response($response);
    }
}