<?php

namespace Simonetti\Rovereti\Tests;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Simonetti\Rovereti\Client;
use Simonetti\Rovereti\IncluirContaPagar;
use Simonetti\Rovereti\ContaPagar;

class IncluirContaPagarTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Exception
     * @expectedExceptionMessage URI não informada
     */
    public function testPostDeveLancarExceptionSeNaoPassarURI()
    {
        $contaPagar = $this->getContaPagar();

        $incluirContaPagar = new IncluirContaPagar($this->getClient());
        $incluirContaPagar->execute('', $contaPagar);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 401
     * @expectedExceptionMessage 401 Unauthorized
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado()
    {
        $contaPagar = $this->getContaPagar();

        $incluirCP = new IncluirContaPagar($this->getClient(401));
        $incluirCP->execute('ContaPagar/IncluirContaPagar', $contaPagar);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 404
     * @expectedExceptionMessage 404 Not Found
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado()
    {
        $contaPagar = $this->getContaPagar();

        $incluirCP = new IncluirContaPagar($this->getClient(404));
        $incluirCP->execute('ContaPagar/IncluirContaPagar', $contaPagar);
    }

    public function testExecuteDeveRetornarStatusCode200()
    {
        $contaPagar = $this->getContaPagar();

        $incluirCP = new IncluirContaPagar($this->getClient());
        $response = $incluirCP->execute('ContaPagar/IncluirContaPagar', $contaPagar);

        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * @return ContaPagar
     */
    private function getContaPagar()
    {
        $contaPagar = new ContaPagar();

        $data = [
            'codEmpresa' => 1,
            'codIntegracaoFilial' => 2,
            'dscContaPagar' => 'fdafffafdfdafa',
            'numCpfCnpj' => '157.178.157-94',
            'nomFornecedor' => 'Basilio Ferraz Pinto',
            'numDocumento' => 112121,
            'datEmissao' => new \DateTime('now'),
            'datVencimento' => new \DateTime('now'),
            'vlrConta' => '125.01',
            'vlrMultaAtraso' => '10.00',
            'vlrJurosAtrasoDia' => '10.00',
            'vlrDesconto' => '10.00',
            'datLimiteDesconto' => new \DateTime('now'),
            'numAnoMesCompetencia' => '201610',
            'indContaReconhecida' => 'S',
            'codIntegracaoAcaoContabil' => '1212.1',
            'codIntegracaoClassGerencial' => '1212.1',
            'codIntegracaoCentroCusto' => '1212.1',
            'dscObservacao' => 'sgdfjfsjajfsagfjgajfsgasjgfsjga',
            'codIntegracaoContaPagar' => '5245',
            'dadosBancarios' => (object)[
                'nomFavorecido' => 'Basilio Ferraz Pinto',
                'numCpfCnpjFavorecido' => '157.178.157-94',
                'numBanco' => 1,
                'numAgencia' => 5468,
                'numContaCorrente' => 1039,
                'numDigitoContaCorrente' => 1,
            ]
        ];

        $contaPagar->populate((object)$data);

        return $contaPagar;
    }

    /**
     * @param int $statusCode
     * @return Client
     */
    public function getClient($statusCode = 200)
    {
        $mock = new MockHandler([
            new Response($statusCode, ['X-Foo' => 'Bar']),
        ]);

        $handler = HandlerStack::create($mock);

        return new Client(new GuzzleClient(['handler' => $handler]));
    }
}
