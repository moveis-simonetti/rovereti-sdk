<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\ContratoContaReceber;

/**
 * Class ContratoTest
 * @package Simonetti\Rovereti\Tests
 */
class ContratoContaReceberTest extends \PHPUnit_Framework_TestCase
{
    public function testPopulate()
    {
        $contratoContaReceber = new ContratoContaReceber();

        $data = [
            'codEmpresa' => 22,
            'codIntegracaoFilial' => '153',
            'dscContrato' => utf8_encode('PRESTAÇÃO DE SERVIÇOS GERAIS'),
            'tipoContrato' => 'SER',
            'numContrato' => '3483432-ABC',
            'codIntegracaoContrato' => '999-555-4444',
            'datContrato' => '26/01/2018',
            'datFaturamento' => '26/01/2018',
            'numNotaFiscal' => 1235555,
            'numSerieNotaFiscal' => 123,
            'vlrContrato' => '15000,00',
            'vlrTotalContrato' => '15000,00',
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
                    'vlrParcela' => '5000,01'
                ]
            ]
        ];

        $contratoContaReceber->populate((object)$data);

        $this->assertInstanceOf(ContratoContaReceber::class, $contratoContaReceber);
        $this->assertEquals($data['codEmpresa'], $contratoContaReceber->getCodEmpresa());
        $this->assertEquals($data['codIntegracaoFilial'], $contratoContaReceber->getCodIntegracaoFilial());
        $this->assertEquals($data['dscContrato'], $contratoContaReceber->getDscContrato());
        $this->assertEquals($data['tipoContrato'], $contratoContaReceber->getTipoContrato());
        $this->assertEquals($data['numContrato'], $contratoContaReceber->getNumContrato());
        $this->assertEquals($data['codIntegracaoContrato'], $contratoContaReceber->getCodIntegracaoContrato());
        $this->assertEquals($data['datContrato'], $contratoContaReceber->getDatContrato());
        $this->assertEquals($data['datFaturamento'], $contratoContaReceber->getDatFaturamento());
        $this->assertEquals($data['numNotaFiscal'], $contratoContaReceber->getNumNotaFiscal());
        $this->assertEquals($data['numSerieNotaFiscal'], $contratoContaReceber->getNumSerieNotaFiscal());
        $this->assertEquals($data['vlrContrato'], $contratoContaReceber->getVlrContrato());
        $this->assertEquals($data['vlrTotalContrato'], $contratoContaReceber->getVlrTotalContrato());
        $this->assertEquals($data['dscObservacao'], $contratoContaReceber->getDscObservacao());
        $this->assertEquals($data['numCpfCnpjCliente'], $contratoContaReceber->getNumCpfCnpjCliente());
        $this->assertEquals($data['nomCliente'], $contratoContaReceber->getNomCliente());
        $this->assertEquals($data['numCnpjFinanciador'], $contratoContaReceber->getNumCnpjFinanciador());
        $this->assertEquals($data['nomFinanciador'], $contratoContaReceber->getNomFinanciador());
        $this->assertEquals($data['codIntegracaoAcaoContabil'], $contratoContaReceber->getCodIntegracaoAcaoContabil());
        $this->assertEquals($data['codIntegracaoClassGerencial'], $contratoContaReceber->getCodIntegracaoClassGerencial());
        $this->assertCount(1, $contratoContaReceber->getParcelas());

        foreach ($data['parcelas'] as $parcela) {
            $this->assertEquals($parcela->numParcela, $contratoContaReceber->getParcelas()[0]->getNumParcela());
            $this->assertEquals($parcela->datVencimento, $contratoContaReceber->getParcelas()[0]->getDatVencimento());
            $this->assertEquals($parcela->vlrParcela, $contratoContaReceber->getParcelas()[0]->getVlrParcela());
        }
    }
}
