<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\MovimentoContaCorrente;

class MovimentoContaCorrenteTest extends \PHPUnit_Framework_TestCase
{
    public function testPopulate()
    {
        $data = [
            'codEmpresa' => 10,
            'codIntegracaoContaCorrente' => 112,
            'codTipoMovto' => 1200,
            'datMovimento' => new \DateTime('now'),
            'vlrMovimento' => 101.12,
            'dscComplemento' => 'fdsafgsgassagh',
            'codIntegracaoTipoMovtoCc' => 12,
            'codIntegracaoMovtoCc' => 13,
            'codIntegracaoFilial' => 2,
        ];

        $movimentoContaCorrente = new MovimentoContaCorrente();

        $movimentoContaCorrente->populate((object)$data);

        $this->assertInstanceOf(MovimentoContaCorrente::class, $movimentoContaCorrente);
        $this->assertEquals($data['codEmpresa'], $movimentoContaCorrente->getCodEmpresa());
        $this->assertEquals($data['codIntegracaoContaCorrente'],
            $movimentoContaCorrente->getCodIntegracaoContaCorrente());
        $this->assertEquals($data['codTipoMovto'], $movimentoContaCorrente->getCodTipoMovto());
        $this->assertEquals($data['datMovimento'], $movimentoContaCorrente->getDatMovimento());
        $this->assertEquals($data['vlrMovimento'], $movimentoContaCorrente->getVlrMovimento());
        $this->assertEquals($data['dscComplemento'], $movimentoContaCorrente->getDscComplemento());
        $this->assertEquals($data['codIntegracaoTipoMovtoCc'], $movimentoContaCorrente->getCodIntegracaoTipoMovtoCc());
        $this->assertEquals($data['codIntegracaoMovtoCc'], $movimentoContaCorrente->getCodIntegracaoMovtoCc());
        $this->assertEquals($data['codIntegracaoFilial'], $movimentoContaCorrente->getCodIntegracaoFilial());
    }

}
