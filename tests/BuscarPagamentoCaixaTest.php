<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\BuscarPagamentoCaixa;

class BuscarPagamentoCaixaTest extends AbstractClientTestCase
{
    public function testPostDeveLancarExceptionSeNaoPassarURI(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('URI não informada');
        $buscarPagamentoCaixa = new BuscarPagamentoCaixa($this->getClient());
        $buscarPagamentoCaixa->execute('', 22, new \DateTime());
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(401);
        $this->expectExceptionMessage('401 Unauthorized');
        $buscarPagamentoCaixa = new BuscarPagamentoCaixa($this->getClient(401));
        $buscarPagamentoCaixa->execute('Caixa/BuscarPagamentoCaixa', 22, new \DateTime());
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(404);
        $this->expectExceptionMessage('404 Not Found');
        $buscarPagamentoCaixa = new BuscarPagamentoCaixa($this->getClient(404));
        $buscarPagamentoCaixa->execute('Caixa/BuscarPagamentoCaixa', 22, new \DateTime());
    }

    public function testExecuteDeveRetornarStatusCode200(): void
    {
        $buscarPagamentoCaixa = new BuscarPagamentoCaixa($this->getClient());
        $response = $buscarPagamentoCaixa->execute('Caixa/BuscarPagamentoCaixa', 22, new \DateTime());

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testDeveLancarExceptionCasoOCodEmpresaSejaMenorQueUm(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('codEmpresa inválido!');
        $buscarPagamentoCaixa = new BuscarPagamentoCaixa($this->getClient());
        $buscarPagamentoCaixa->execute('Caixa/BuscarPagamentoCaixa', 0, new \DateTime());
    }
}
