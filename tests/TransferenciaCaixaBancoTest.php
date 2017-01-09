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
            'datTransferencia' => new \DateTime('2017-01-09 12:07:00'),
            'vlrTransferencia' => 125.04,
            'codIntegracaoTransferencia' => 121
        ];

        $transferencia = new TransferenciaCaixaBanco(
            $data['codEmpresa'],
            $data['codIntegracaoFilial'],
            $data['codIntegracaoContaCorrente'],
            $data['datTransferencia'],
            $data['vlrTransferencia'],
            $data['codIntegracaoTransferencia']
        );

        $this->assertInstanceOf(TransferenciaCaixaBanco::class, $transferencia);
        $this->assertEquals(1212, $transferencia->getCodEmpresa());
        $this->assertEquals(2, $transferencia->getCodIntegracaoFilial());
        $this->assertEquals(11, $transferencia->getCodIntegracaoContaCorrente());
        $this->assertEquals(new \DateTime('2017-01-09 12:07:00'), $transferencia->getDatTransferencia());
        $this->assertEquals(125.04, $transferencia->getVlrTransferencia());
        $this->assertEquals(121, $transferencia->getCodIntegracaoTransferencia());
    }

}
