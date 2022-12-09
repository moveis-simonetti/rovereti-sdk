<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\ContratoContaReceber;
use Simonetti\Rovereti\IncluirContratoContaReceber;

/**
 * Class IncluirContratoContaReceberTest
 * @package Simonetti\Rovereti\Tests
 */
class IncluirContratoContaReceberTest extends AbstractClientTestCase
{
    public function testPostDeveLancarExceptionSeNaoPassarURI(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('URI não informada');
        $incluirCCR = new IncluirContratoContaReceber($this->getClient());
        $incluirCCR->execute('', $this->getContratoContaReceber());
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(401);
        $this->expectExceptionMessage('401 Unauthorized');
        $incluirCCR = new IncluirContratoContaReceber($this->getClient(401));
        $incluirCCR->execute('ContaReceber/IncluirContrato', $this->getContratoContaReceber());
    }

    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(404);
        $this->expectExceptionMessage('404 Not Found');
        $incluirCCR = new IncluirContratoContaReceber($this->getClient(404));
        $incluirCCR->execute('ContaReceber/IncluirContrato', $this->getContratoContaReceber());
    }

    public function testExecuteDeveRetornarStatusCode200(): void
    {
        $incluirCCR = new IncluirContratoContaReceber($this->getClient());
        $response = $incluirCCR->execute('ContaReceber/IncluirContrato', $this->getContratoContaReceber());

        $this->assertEquals(200, $response->getStatusCode());
    }

    private function getContratoContaReceber(): ContratoContaReceber
    {
        $contratoContaReceber = new ContratoContaReceber();

        $data = [
            'codEmpresa' => 22,
            'codIntegracaoFilial' => '153',
            'dscContrato' => utf8_encode('PRESTAÇÃO DE SERVIÇOS GERAIS'),
            'tipoContrato' => 'SER',
            'numContrato' => '3483432-ABC',
            'codIntegracaoContrato' => 999-555-4444,
            'datContrato' => '26/01/2018',
            'datFaturamento' => '26/01/2018',
            'numNotaFiscal' => 1_235_555,
            'numSerieNotaFiscal' => 123,
            'vlrContrato' => '15000.00',
            'vlrTotalContrato' => '15000.00',
            'dscObservacao'=> '',
            'numCpfCnpjCliente' => 75_069_849_000_110,
            'nomCliente' => utf8_encode('DEMOBILE - INDUSTRIA DE MOVEIS'),
            'numCnpjFinanciador' => 75_069_849_000_110,
            'nomFinanciador' => utf8_encode('DEMOBILE - INDUSTRIA DE MOVEIS'),
            'codIntegracaoAcaoContabil' => '',
            'codIntegracaoClassGerencial' => '',
            'parcelas' => (object) [
                (object) [
                    'numParcela' => 1,
                    'datVencimento' => '26/01/2018',
                    'vlrParcela' => '5000.01',
                ],
            ],
        ];

        $contratoContaReceber->populate((object) $data);

        return $contratoContaReceber;
    }
}
