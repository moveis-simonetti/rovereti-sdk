<?php
namespace Simonetti\Rovereti;

/**
 * Class IncluirMovimentoCaixa
 * @package Simonetti\Rovereti
 */
class IncluirMovimentoCaixa extends AbstractSendRequest
{
    /**
     * @param string $uri
     * @param MovimentoCaixa $movimentoCaixa
     * @return Response
     */
    public function execute(string $uri, MovimentoCaixa $movimentoCaixa)
    {
        return $this->send($uri, $movimentoCaixa->toArray());
    }
}