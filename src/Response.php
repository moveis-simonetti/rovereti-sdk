<?php
namespace Simonetti\Rovereti;

use Psr\Http\Message\ResponseInterface;

/**
 * Class Response
 * @package Simonetti\Rovereti
 */
class Response implements \JsonSerializable
{
    /**
     * @var ResponseInterface
     */
    protected $originalResponse;

    /**
     * Response constructor.
     * @param ResponseInterface $originalResponse
     */
    public function __construct(ResponseInterface $originalResponse)
    {
        $this->originalResponse = $originalResponse;
    }

    /**
     * @return array
     */
    function jsonSerialize()
    {
        return [
            'statusCode' => $this->originalResponse->getStatusCode(),
            'contents' => $this->originalResponse->getBody()->getContents(),
        ];
    }
}