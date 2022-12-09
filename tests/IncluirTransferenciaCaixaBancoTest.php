<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\IncluirTransferenciaCaixaBanco;
use Simonetti\Rovereti\TransferenciaCaixaBanco;

class IncluirTransferenciaCaixaBancoTest extends AbstractClientTestCase
{
    public function testPostDeveLancarExceptionSeNaoPassarURI(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('URI não informada');
        $transferencia = $this->getTransferenciaCaixaBanco();

        $incluirTransferencia = new IncluirTransferenciaCaixaBanco($this->getClient());
        $incluirTransferencia->execute('', $transferencia);
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(401);
        $this->expectExceptionMessage('401 Unauthorized');
        $transferencia = $this->getTransferenciaCaixaBanco();

        $incluirTransferencia = new IncluirTransferenciaCaixaBanco($this->getClient(401));
        $incluirTransferencia->execute('Caixa/IncluirMovtoCaixaBanco', $transferencia);
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(404);
        $this->expectExceptionMessage('404 Not Found');
        $transferencia = $this->getTransferenciaCaixaBanco();

        $incluirTransferencia = new IncluirTransferenciaCaixaBanco($this->getClient(404));
        $incluirTransferencia->execute('Caixa/IncluirMovtoCaixaBanco', $transferencia);
    }

    public function testExecuteDeveRetornarStatusCode200(): void
    {
        $transferencia = $this->getTransferenciaCaixaBanco();

        $incluirTransferencia = new IncluirTransferenciaCaixaBanco($this->getClient());
        $response = $incluirTransferencia->execute('Caixa/IncluirMovtoCaixaBanco', $transferencia);

        $this->assertEquals(200, $response->getStatusCode());
    }

    private function getTransferenciaCaixaBanco(): TransferenciaCaixaBanco
    {
        $data = [
            'codEmpresa' => 1212,
            'codIntegracaoFilial' => 2,
            'codIntegracaoContaCorrente' => 11,
            'datTransferencia' => '01/01/2017',
            'vlrTransferencia' => 125.04,
            'codIntegracaoTransferencia' => 121,
        ];

        $transferencia = new TransferenciaCaixaBanco();
        $transferencia->populate((object) $data);

        return $transferencia;
    }
}
