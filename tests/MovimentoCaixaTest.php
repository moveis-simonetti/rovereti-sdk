<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\MovimentoCaixa;

class MovimentoCaixaTest extends \PHPUnit\Framework\TestCase
{

    public function testPopulate()
    {
        $movimentoCaixa = new MovimentoCaixa();

        $data = [
            'codEmpresa' => 21,
            'codIntegracaoFilial' => 12,
            'codTipoMovto' => 12,
            'datMovimento' => '01/01/2017',
            'vlrMovimento' => 150.02,
            'dscComplemento' => 'fsdgfasgfsagsa',
            'codIntegracaoTipoMovtoCx' => 212,
            'codIntegracaoMovtoCx' => 121,
        ];

        $movimentoCaixa->populate((object)$data);

        $this->assertInstanceOf(MovimentoCaixa::class, $movimentoCaixa);
        $this->assertEquals($data['codEmpresa'], $movimentoCaixa->getCodEmpresa());
        $this->assertEquals($data['codIntegracaoFilial'], $movimentoCaixa->getCodIntegracaoFilial());
        $this->assertEquals($data['codTipoMovto'], $movimentoCaixa->getCodTipoMovto());
        $this->assertEquals($data['datMovimento'], $movimentoCaixa->getDatMovimento());
        $this->assertEquals($data['vlrMovimento'], $movimentoCaixa->getVlrMovimento());
        $this->assertEquals($data['dscComplemento'], $movimentoCaixa->getDscComplemento());
        $this->assertEquals($data['codIntegracaoTipoMovtoCx'], $movimentoCaixa->getCodIntegracaoTipoMovtoCx());
        $this->assertEquals($data['codIntegracaoMovtoCx'], $movimentoCaixa->getCodIntegracaoMovtoCx());
    }

}
