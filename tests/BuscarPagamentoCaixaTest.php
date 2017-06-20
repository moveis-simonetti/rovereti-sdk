<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\BuscarPagamentoCaixa;

class BuscarPagamentoCaixaTest extends AbstractClientTestCase
{
    /**
     * @expectedException \Exception
     * @expectedExceptionMessage URI não informada
     */
    public function testPostDeveLancarExceptionSeNaoPassarURI()
    {
        $buscarPagamentoCaixa = new BuscarPagamentoCaixa($this->getClient());
        $buscarPagamentoCaixa->execute('', [
            'codEmpresa' => 22,
            'datPagamento' => "26-01-2016"
        ]);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 401
     * @expectedExceptionMessage 401 Unauthorized
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado()
    {
        $buscarPagamentoCaixa = new BuscarPagamentoCaixa($this->getClient(401));
        $buscarPagamentoCaixa->execute('Caixa/BuscarPagamentoCaixa', [
            'codEmpresa' => 22,
            'datPagamento' => "26-01-2016"
        ]);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 404
     * @expectedExceptionMessage 404 Not Found
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado()
    {
        $buscarPagamentoCaixa = new BuscarPagamentoCaixa($this->getClient(404));
        $buscarPagamentoCaixa->execute('Caixa/BuscarPagamentoCaixa', [
            'codEmpresa' => 22,
            'datPagamento' => "26-01-2016"
        ]);
    }

    public function testExecuteDeveRetornarStatusCode200()
    {
        $buscarPagamentoCaixa = new BuscarPagamentoCaixa($this->getClient());
        $response = $buscarPagamentoCaixa->execute('Caixa/BuscarPagamentoCaixa', [
            'codEmpresa' => 22,
            'datPagamento' => "26-01-2016"
        ]);

        $this->assertEquals(200, $response->getStatusCode());
    }
}