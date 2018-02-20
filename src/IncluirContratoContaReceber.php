<?php

namespace Simonetti\Rovereti;

/**
 * Class IncluirContratoContaReceber
 * @package Simonetti\Rovereti
 */
class IncluirContratoContaReceber extends AbstractSendRequest
{
    /**
     * Responsável por mandar Inclusão de Contrato de Conta Receber para o Serviço da Rovereti
     * @param string $uri
     * @param ContratoContaReceber $contratoContaReceber
     * @return Response
     */
    public function execute(string $uri, ContratoContaReceber $contratoContaReceber)
    {
        return $this->send(self::POST_METHOD, $uri, $contratoContaReceber->toArray());
    }
}