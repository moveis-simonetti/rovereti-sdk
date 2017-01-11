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
     * @param MovimentoContaCorrente $movtoContaCorrente
     * @return Response
     */
    public function execute(string $uri, MovimentoContaCorrente $movtoContaCorrente)
    {
        return $this->send($uri, $movtoContaCorrente->toArray());
    }
}