<?php

namespace Simonetti\Rovereti\Tests;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Simonetti\Rovereti\Client;
use Simonetti\Rovereti\IncluirTransferenciaCaixaBanco;
use Simonetti\Rovereti\TransferenciaCaixaBanco;

class IncluirTransferenciaCaixaBancoTest extends AbstractClientTestCase
{
    /**
     * @expectedException \Exception
     * @expectedExceptionMessage URI não informada
     */
    public function testPostDeveLancarExceptionSeNaoPassarURI()
    {
        $transferencia = $this->getTransferenciaCaixaBanco();

        $incluirTransferencia = new IncluirTransferenciaCaixaBanco($this->getClient());
        $incluirTransferencia->execute('', $transferencia);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 401
     * @expectedExceptionMessage 401 Unauthorized
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado()
    {
        $transferencia = $this->getTransferenciaCaixaBanco();

        $incluirTransferencia = new IncluirTransferenciaCaixaBanco($this->getClient(401));
        $incluirTransferencia->execute('Caixa/IncluirMovtoCaixaBanco', $transferencia);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 404
     * @expectedExceptionMessage 404 Not Found
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado()
    {
        $transferencia = $this->getTransferenciaCaixaBanco();

        $incluirTransferencia = new IncluirTransferenciaCaixaBanco($this->getClient(404));
        $incluirTransferencia->execute('Caixa/IncluirMovtoCaixaBanco', $transferencia);
    }

    public function testExecuteDeveRetornarStatusCode200()
    {
        $transferencia = $this->getTransferenciaCaixaBanco();

        $incluirTransferencia = new IncluirTransferenciaCaixaBanco($this->getClient());
        $response = $incluirTransferencia->execute('Caixa/IncluirMovtoCaixaBanco', $transferencia);

        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * @return TransferenciaCaixaBanco
     */
    private function getTransferenciaCaixaBanco()
    {
        $data = [
            'codEmpresa' => 1212,
            'codIntegracaoFilial' => 2,
            'codIntegracaoContaCorrente' => 11,
            'datTransferencia' => '01/01/2017',
            'vlrTransferencia' => 125.04,
            'codIntegracaoTransferencia' => 121
        ];

        return $transferencia = new TransferenciaCaixaBanco(
            $data['codEmpresa'],
            $data['codIntegracaoFilial'],
            $data['codIntegracaoContaCorrente'],
            $data['datTransferencia'],
            $data['vlrTransferencia'],
            $data['codIntegracaoTransferencia']
        );
    }
}
