<?php

namespace Simonetti\Rovereti;

/**
 * Class IncluirTransferenciaCaixaBanco
 * @package Simonetti\Rovereti
 */
class IncluirTransferenciaCaixaBanco extends AbstractSendRequest
{
    /**
     * Responsável por mandar Inclusão de Transferência de Caixa para Banco para Serviço da Rovereti
     * @param string $uri
     * @param TransferenciaCaixaBanco $transferenciaCaixaBanco
     * @return Response
     */
    public function execute(string $uri, TransferenciaCaixaBanco $transferenciaCaixaBanco)
    {
        return $this->send($uri, $transferenciaCaixaBanco->toArray());
    }
}