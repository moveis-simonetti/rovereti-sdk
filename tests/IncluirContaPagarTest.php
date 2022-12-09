<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\ContaPagar;
use Simonetti\Rovereti\IncluirContaPagar;

class IncluirContaPagarTest extends AbstractClientTestCase
{
    public function testPostDeveLancarExceptionSeNaoPassarURI(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('URI não informada');
        $contaPagar = $this->getContaPagar();

        $incluirContaPagar = new IncluirContaPagar($this->getClient());
        $incluirContaPagar->execute('', $contaPagar);
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(401);
        $this->expectExceptionMessage('401 Unauthorized');
        $contaPagar = $this->getContaPagar();

        $incluirCP = new IncluirContaPagar($this->getClient(401));
        $incluirCP->execute('ContaPagar/IncluirContaPagar', $contaPagar);
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(404);
        $this->expectExceptionMessage('404 Not Found');
        $contaPagar = $this->getContaPagar();

        $incluirCP = new IncluirContaPagar($this->getClient(404));
        $incluirCP->execute('ContaPagar/IncluirContaPagar', $contaPagar);
    }

    public function testExecuteDeveRetornarStatusCode200(): void
    {
        $contaPagar = $this->getContaPagar();

        $incluirCP = new IncluirContaPagar($this->getClient());
        $response = $incluirCP->execute('ContaPagar/IncluirContaPagar', $contaPagar);

        $this->assertEquals(200, $response->getStatusCode());
    }

    private function getContaPagar(): ContaPagar
    {
        $contaPagar = new ContaPagar();

        $data = [
            'codEmpresa' => 1,
            'codIntegracaoFilial' => 2,
            'dscContaPagar' => 'fdafffafdfdafa',
            'numCpfCnpj' => '157.178.157-94',
            'nomFornecedor' => 'Basilio Ferraz Pinto',
            'numDocumento' => 112121,
            'datEmissao' => '17/01/2017',
            'datVencimento' => '17/01/2017',
            'vlrConta' => '125.01',
            'vlrMultaAtraso' => '10.00',
            'vlrJurosAtrasoDia' => '10.00',
            'vlrDesconto' => '10.00',
            'datLimiteDesconto' => '17/01/2017',
            'numAnoMesCompetencia' => '201610',
            'indContaReconhecida' => 'S',
            'codIntegracaoAcaoContabil' => '1212.1',
            'codIntegracaoClassGerencial' => '1212.1',
            'codIntegracaoCentroCusto' => '1212.1',
            'dscObservacao' => 'sgdfjfsjajfsagfjgajfsgasjgfsjga',
            'codIntegracaoContaPagar' => '5245',
            'dadosBancarios' => (object) [
                'nomFavorecido' => 'Basilio Ferraz Pinto',
                'numCpfCnpjFavorecido' => '157.178.157-94',
                'numBanco' => 1,
                'numAgencia' => 5468,
                'numContaCorrente' => 1039,
                'numDigitoContaCorrente' => 1,
            ],
        ];

        $contaPagar->populate((object) $data);

        return $contaPagar;
    }
}
