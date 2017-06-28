<?php

namespace Simonetti\Rovereti;

/**
 * Class IncluirCreditoFornecedor
 * @package Simonetti\Rovereti
 */
class IncluirCreditoFornecedor extends AbstractSendRequest
{
    /**
     * @param $uri
     * @param CreditoFornecedor $creditoFornecedor
     * @return Response
     */
    public function execute($uri, CreditoFornecedor $creditoFornecedor)
    {
        return $this->send(self::POST_METHOD, $uri, $creditoFornecedor->toArray());
    }
}