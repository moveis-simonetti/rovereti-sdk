<?php
namespace Simonetti\Rovereti;

/**
 * Class CancelarContaPagar
 * @package Simonetti\Rovereti
 */
class CancelarContaPagar extends AbstractSendRequest
{
    /**
     * Responsável por mandar Cancelamento de Conta Pagar para Serviço da Rovereti
     * @param string $uri
     * @param CancelamentoContaPagar $cancelamentoContaPagar
     * @return Response
     */
    public function execute(string $uri, CancelamentoContaPagar $cancelamentoContaPagar)
    {
        return $this->send($uri, $cancelamentoContaPagar->toArray());
    }
}