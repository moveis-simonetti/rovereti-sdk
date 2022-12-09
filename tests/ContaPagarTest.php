<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\ContaPagar;

class ContaPagarTest extends \PHPUnit\Framework\TestCase
{
    public function testPopulate()
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
            'nomFavorecido' => 'Basilio Ferraz Pinto',
            'numCpfCnpjFavorecido' => '157.178.157-94',
            'numBanco' => 1,
            'numAgencia' => 5468,
            'numContaCorrente' => 1039,
            'numDigitoContaCorrente' => 1,
        ];

        $contaPagar->populate((object)$data);

        $this->assertInstanceOf(ContaPagar::class, $contaPagar);
        $this->assertEquals($data['codEmpresa'], $contaPagar->getCodEmpresa());
        $this->assertEquals($data['codIntegracaoFilial'], $contaPagar->getCodIntegracaoFilial());
        $this->assertEquals($data['dscContaPagar'], $contaPagar->getDscContaPagar());
        $this->assertEquals($data['numCpfCnpj'], $contaPagar->getNumCpfCnpj());
        $this->assertEquals($data['nomFornecedor'], $contaPagar->getNomFornecedor());
        $this->assertEquals($data['numDocumento'], $contaPagar->getNumDocumento());
        $this->assertEquals($data['datEmissao'], $contaPagar->getDatEmissao());
        $this->assertEquals($data['datVencimento'], $contaPagar->getDatVencimento());
        $this->assertEquals($data['vlrConta'], $contaPagar->getVlrConta());
        $this->assertEquals($data['vlrMultaAtraso'], $contaPagar->getVlrMultaAtraso());
        $this->assertEquals($data['vlrJurosAtrasoDia'], $contaPagar->getVlrJurosAtrasoDia());
        $this->assertEquals($data['vlrDesconto'], $contaPagar->getVlrDesconto());
        $this->assertEquals($data['datLimiteDesconto'], $contaPagar->getDatLimiteDesconto());
        $this->assertEquals($data['numAnoMesCompetencia'], $contaPagar->getNumAnoMesCompetencia());
        $this->assertEquals($data['indContaReconhecida'], $contaPagar->getIndContaReconhecida());
        $this->assertEquals($data['codIntegracaoAcaoContabil'], $contaPagar->getCodIntegracaoAcaoContabil());
        $this->assertEquals($data['codIntegracaoClassGerencial'], $contaPagar->getCodIntegracaoClassGerencial());
        $this->assertEquals($data['codIntegracaoCentroCusto'], $contaPagar->getCodIntegracaoCentroCusto());
        $this->assertEquals($data['dscObservacao'], $contaPagar->getDscObservacao());
        $this->assertEquals($data['codIntegracaoContaPagar'], $contaPagar->getCodIntegracaoContaPagar());
        $this->assertEquals($data['nomFavorecido'], $contaPagar->getNomFavorecido());
        $this->assertEquals($data['numCpfCnpjFavorecido'], $contaPagar->getNumCpfCnpjFavorecido());
        $this->assertEquals($data['numBanco'], $contaPagar->getNumBanco());
        $this->assertEquals($data['numAgencia'], $contaPagar->getNumAgencia());
        $this->assertEquals($data['numContaCorrente'], $contaPagar->getNumContaCorrente());
        $this->assertEquals($data['numDigitoContaCorrente'], $contaPagar->getNumDigitoContaCorrente());
    }
}
