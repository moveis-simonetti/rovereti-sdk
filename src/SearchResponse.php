<?php

namespace Simonetti\Rovereti;

class SearchResponse extends Response
{
    /**
     * @var ObjectDataUtil[]
     */
    private $result;

    public function __construct(Response $response, array $result)
    {
        parent::__construct($response->getOriginalResponse());
        $this->result = $result;
    }

    /**
     * @return ObjectDataUtil[]
     */
    public function getResult(): array
    {
        return $this->result;
    }

    private function jsonSerializeRecursive($root)
    {
        if (is_scalar($root)) {
            return $root;
        }

        if (is_array($root)) {
            foreach ($root as $key => $value) {
                $root[$key] = $this->jsonSerializeRecursive($value);
            }

            return $root;
        }

        if ($root instanceof ToArrayInterface) {
            return $root->toArray();
        }

        throw new Exception("Not serializable object found!");
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'statusCode' => $this->originalResponse->getStatusCode(),
            'contents' => $this->jsonSerializeRecursive($this->result)
        ];
    }
}