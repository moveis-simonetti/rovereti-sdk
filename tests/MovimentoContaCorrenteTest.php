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
            'datMovimento' => '10/01/2017',
            'vlrMovimento' => 101.12,
            'dscComplemento' => 'fdsafgsgassagh',
            'codIntegracaoTipoMovtoCc' => 12,
            'codIntegracaoMovtoCc' => 13,
            'codIntegracaoFilial' => 2,
        ];

        $movimento = new MovimentoContaCorrente();

        $movimento->populate((object)$data);

        $this->assertInstanceOf(MovimentoContaCorrente::class, $movimento);
        $this->assertEquals($data['codEmpresa'], $movimento->getCodEmpresa());
        $this->assertEquals($data['codIntegracaoContaCorrente'],
            $movimento->getCodIntegracaoContaCorrente());
        $this->assertEquals($data['codTipoMovto'], $movimento->getCodTipoMovto());
        $this->assertEquals($data['datMovimento'], $movimento->getDatMovimento());
        $this->assertEquals($data['vlrMovimento'], $movimento->getVlrMovimento());
        $this->assertEquals($data['dscComplemento'], $movimento->getDscComplemento());
        $this->assertEquals($data['codIntegracaoTipoMovtoCc'], $movimento->getCodIntegracaoTipoMovtoCc());
        $this->assertEquals($data['codIntegracaoMovtoCc'], $movimento->getCodIntegracaoMovtoCc());
        $this->assertEquals($data['codIntegracaoFilial'], $movimento->getCodIntegracaoFilial());
    }

}
