<?php

namespace Simonetti\Rovereti;

/**
 * Class BuscarPagamentoCaixa
 * @package Simonetti\Rovereti
 */
class BuscarPagamentoCaixa extends AbstractSendRequest
{
    /**
     * @param string $uri
     * @param array $data
     * @return Response
     * @throws \Exception
     */
    public function execute(string $uri, array $data)
    {
        if (empty($uri)) {
            throw new \Exception("URI não informada!");
        }

        return $this->send(
            self::GET_METHOD, ($uri . "/" . implode('/', $data))
        );
    }
}