<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\TransferenciaCaixaBanco;

class TransferenciaCaixaBancoTest extends \PHPUnit_Framework_TestCase
{

    public function testValidarDadosPassadosNoConstrutor()
    {
        $data = [
            'codEmpresa' => 1212,
            'codIntegracaoFilial' => 2,
            'codIntegracaoContaCorrente' => 11,
            'datTransferencia' => '01/01/2017',
            'vlrTransferencia' => 125.04,
            'codIntegracaoTransferencia' => 121
        ];

        $transferencia = new TransferenciaCaixaBanco();
        $transferencia->populate((object)$data);

        $this->assertInstanceOf(TransferenciaCaixaBanco::class, $transferencia);
        $this->assertEquals($data['codEmpresa'], $transferencia->getCodEmpresa());
        $this->assertEquals($data['codIntegracaoFilial'], $transferencia->getCodIntegracaoFilial());
        $this->assertEquals($data['codIntegracaoContaCorrente'], $transferencia->getCodIntegracaoContaCorrente());
        $this->assertEquals($data['datTransferencia'], $transferencia->getDatTransferencia());
        $this->assertEquals($data['vlrTransferencia'], $transferencia->getVlrTransferencia());
        $this->assertEquals($data['codIntegracaoTransferencia'], $transferencia->getCodIntegracaoTransferencia());
    }

}
