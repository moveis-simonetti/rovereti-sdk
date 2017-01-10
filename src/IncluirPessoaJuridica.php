<?php
namespace Simonetti\Rovereti;

/**
 * Class IncluirPessoaJuridica
 * @package Simonetti\Rovereti
 */
class IncluirPessoaJuridica extends AbstractSendRequest
{
    /**
     * @param string $uri
     * @param PessoaJuridica $pessoaJuridica
     * @return Response
     */
    public function execute(string $uri, PessoaJuridica $pessoaJuridica)
    {
        return $this->send($uri, $pessoaJuridica->toArray());
    }
}