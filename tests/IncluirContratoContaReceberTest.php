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
    /**
     * @expectedException \Exception
     * @expectedExceptionMessage URI não informada
     */
    public function testPostDeveLancarExceptionSeNaoPassarURI()
    {
        $incluirCCR = new IncluirContratoContaReceber($this->getClient());
        $incluirCCR->execute('', $this->getContratoContaReceber());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 401
     * @expectedExceptionMessage 401 Unauthorized
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado()
    {
        $incluirCCR = new IncluirContratoContaReceber($this->getClient(401));
        $incluirCCR->execute('ContaReceber/IncluirContrato', $this->getContratoContaReceber());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 404
     * @expectedExceptionMessage 404 Not Found
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado()
    {
        $incluirCCR = new IncluirContratoContaReceber($this->getClient(404));
        $incluirCCR->execute('ContaReceber/IncluirContrato', $this->getContratoContaReceber());
    }

    public function testExecuteDeveRetornarStatusCode200()
    {
        $incluirCCR = new IncluirContratoContaReceber($this->getClient());
        $response = $incluirCCR->execute('ContaReceber/IncluirContrato', $this->getContratoContaReceber());

        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * @return ContratoContaReceber
     */
    private function getContratoContaReceber()
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
            'numNotaFiscal' => 1235555,
            'numSerieNotaFiscal' => 123,
            'vlrContrato' => '15000.00',
            'vlrTotalContrato' => '15000.00',
            'dscObservacao'=> '',
            'numCpfCnpjCliente' => 75069849000110,
            'nomCliente' => utf8_encode('DEMOBILE - INDUSTRIA DE MOVEIS'),
            'numCnpjFinanciador' => 75069849000110,
            'nomFinanciador' => utf8_encode('DEMOBILE - INDUSTRIA DE MOVEIS'),
            'codIntegracaoAcaoContabil' => '',
            'codIntegracaoClassGerencial' => '',
            'parcelas' => (object)[
                (object)[
                    'numParcela' => 1,
                    'datVencimento' => '26/01/2018',
                    'vlrParcela' => '5000.01'
                ]
            ]
        ];

        $contratoContaReceber->populate((object)$data);

        return $contratoContaReceber;
    }
}
