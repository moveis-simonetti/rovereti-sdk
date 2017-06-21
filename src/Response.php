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
    public function jsonSerialize(): array
    {
        return [
            'statusCode' => $this->originalResponse->getStatusCode(),
            'contents' => $this->originalResponse->getBody()->getContents(),
        ];
    }

    /**
     * @return ResponseInterface
     */
    public function getOriginalResponse(): ResponseInterface
    {
        return $this->originalResponse;
    }

    /**
     * @return array
     */
    public function getBodyContentsAsArray(): array
    {
        return json_decode($this->originalResponse->getBody()->getContents(), true) ?: [];
    }
}