<?php
namespace Simonetti\Rovereti;

/**
 * Class IncluirMovimentoContaCorrente
 * @package Simonetti\Rovereti
 */
class IncluirMovimentoContaCorrente extends AbstractSendRequest
{
    /**
     * Responsável por mandar Inclusão de Conta a pagar para Serviço da Rovereti
     * @param string $uri
     * @param MovimentoContaCorrente $movtoContaCorrente
     * @return Response
     */
    public function execute(string $uri, MovimentoContaCorrente $movtoContaCorrente)
    {
        return $this->send($uri, $movtoContaCorrente->toArray());
    }
}