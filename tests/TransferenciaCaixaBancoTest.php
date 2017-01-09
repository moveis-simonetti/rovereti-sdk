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

        $transferenciaCaixaBanco = new TransferenciaCaixaBanco(
            $data['codEmpresa'],
            $data['codIntegracaoFilial'],
            $data['codIntegracaoContaCorrente'],
            $data['datTransferencia'],
            $data['vlrTransferencia'],
            $data['codIntegracaoTransferencia']
        );

        $this->assertInstanceOf(TransferenciaCaixaBanco::class, $transferenciaCaixaBanco);
        $this->assertEquals(1212, $transferenciaCaixaBanco->getCodEmpresa());
        $this->assertEquals(2, $transferenciaCaixaBanco->getCodIntegracaoFilial());
        $this->assertEquals(11, $transferenciaCaixaBanco->getCodIntegracaoContaCorrente());
        $this->assertEquals(new \DateTime('2017-01-09 12:07:00'), $transferenciaCaixaBanco->getDatTransferencia());
        $this->assertEquals(125.04, $transferenciaCaixaBanco->getVlrTransferencia());
        $this->assertEquals(121, $transferenciaCaixaBanco->getCodIntegracaoTransferencia());
    }

}
