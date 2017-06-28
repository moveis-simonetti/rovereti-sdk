<?php

namespace Simonetti\Rovereti;

class IncluirCreditoFornecedor extends AbstractSendRequest
{
    public function execute($uri, CreditoFornecedor $creditoFornecedor)
    {
        return $this->send(self::POST_METHOD, $uri, $creditoFornecedor->toArray());
    }
}