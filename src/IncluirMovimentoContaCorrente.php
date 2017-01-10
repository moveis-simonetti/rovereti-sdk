<?php
namespace Simonetti\Rovereti;

/**
 * Class IncluirMovimentoContaCorrente
 * @package Simonetti\Rovereti
 */
class IncluirMovimentoContaCorrente extends AbstractSendRequest
{
    /**
     * @param string $uri
     * @param MovimentoContaCorrente $movimentoContaCorrente
     * @return Response
     */
    public function execute(string $uri, MovimentoContaCorrente $movimentoContaCorrente)
    {
        return $this->send($uri, $movimentoContaCorrente->toArray());
    }
}