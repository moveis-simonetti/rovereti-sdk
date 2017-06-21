<?php

namespace Simonetti\Rovereti;

use Psr\Http\Message\ResponseInterface;

class SearchResponse extends Response
{
    /**
     * @var array
     */
    private $result;

    public function __construct(Response $response, array $result)
    {
        parent::__construct($response->getOriginalResponse());
        $this->result = $result;
    }

    /**
     * @return array
     */
    public function getResult(): array
    {
        return $this->result;
    }
}