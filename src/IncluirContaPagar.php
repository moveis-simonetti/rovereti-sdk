<?php

namespace Simonetti\Rovereti;

class IncluirContaPagar extends AbstractSendRequest
{
    /**
     * @param string $uri
     * @param ContaPagar $contaPagar
     * @return Response
     */
    public function execute(string $uri, ContaPagar $contaPagar)
    {
        return $this->send($uri, $contaPagar->toArray());
    }
}