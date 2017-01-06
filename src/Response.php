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
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->originalResponse->getStatusCode();
    }

    /**
     * @return array
     */
    function jsonSerialize(): array
    {
        return [
            'statusCode' => $this->originalResponse->getStatusCode(),
            'contents' => $this->originalResponse->getBody()->getContents(),
        ];
    }
}