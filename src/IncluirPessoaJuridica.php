<?php
namespace Simonetti\Rovereti;

/**
 * Class IncluirPessoaJuridica
 * @package Simonetti\Rovereti
 */
class IncluirPessoaJuridica extends AbstractSendRequest
{
    /**
     * Responsável por mandar Inclusão de Pessoa Juridica para Serviço da Rovereti
     * @param string $uri
     * @param PessoaJuridica $pessoaJuridica
     * @return Response
     */
    public function execute(string $uri, PessoaJuridica $pessoaJuridica)
    {
        return $this->send(self::POST_METHOD, $uri, $pessoaJuridica->toArray());
    }
}