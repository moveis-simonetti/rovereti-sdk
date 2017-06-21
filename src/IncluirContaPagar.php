<?php

namespace Simonetti\Rovereti;

class IncluirContaPagar extends AbstractSendRequest
{
    /**
     * Responsável por mandar Inclusão de Conta a pagar para Serviço da Rovereti
     * @param string $uri
     * @param ContaPagar $contaPagar
     * @return Response
     */
    public function execute(string $uri, ContaPagar $contaPagar)
    {
        return $this->send(self::POST_METHOD, $uri, $contaPagar->toArray());
    }
}