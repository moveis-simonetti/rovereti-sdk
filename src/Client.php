<?php
namespace Simonetti\Rovereti;

/**
 * Class Client
 * @package Simonetti\Rovereti
 */
class Client
{
    /**
     * @var \GuzzleHttp\Client
     */
    protected $guzzleClient;

    /**
     * Client constructor.
     * @param \GuzzleHttp\Client $guzzleClient
     */
    public function __construct(\GuzzleHttp\Client $guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
    }

    /**
     * @param \stdClass $data
     * @return Response
     * @throws \Exception
     */
    public function post(\stdClass $data) : Response
    {
        if (!isset($data->uri)) {
            throw new \Exception("URI não informada.");
        }

        $response = $this->guzzleClient->request('POST', $data->uri, [
            'form_params' => (array)$data,
        ]);

        return new Response($response);
    }
}