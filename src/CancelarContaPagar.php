<?php
namespace Simonetti\Rovereti;

/**
 * Class CancelarContaPagar
 * @package Simonetti\Rovereti
 */
class CancelarContaPagar extends AbstractSendRequest
{
    /**
     * @param string $uri
     * @param CancelamentoContaPagar $cancelamentoContaPagar
     * @return Response
     */
    public function execute(string $uri, CancelamentoContaPagar $cancelamentoContaPagar)
    {
        return $this->send($uri, $cancelamentoContaPagar->toArray());
    }
}