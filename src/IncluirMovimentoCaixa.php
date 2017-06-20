<?php
namespace Simonetti\Rovereti;

/**
 * Class IncluirMovimentoCaixa
 * @package Simonetti\Rovereti
 */
class IncluirMovimentoCaixa extends AbstractSendRequest
{
    /**
     * Responsável por mandar Inclusão de Movimento de caixa para Serviço da Rovereti
     * @param string $uri
     * @param MovimentoCaixa $movimentoCaixa
     * @return Response
     */
    public function execute(string $uri, MovimentoCaixa $movimentoCaixa)
    {
        return $this->send(self::POST_METHOD, $uri, $movimentoCaixa->toArray());
    }
}