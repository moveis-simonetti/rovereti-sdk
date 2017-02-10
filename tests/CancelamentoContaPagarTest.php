<?php
/**
 * Created by PhpStorm.
 * User: basilio
 * Date: 09/01/17
 * Time: 14:35
 */

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\CancelamentoContaPagar;

class CancelamentoContaPagarTest extends \PHPUnit_Framework_TestCase
{

    public function testValidateInstance()
    {
        $cancelamento = new CancelamentoContaPagar();

        $data = [
            'codEmpresa' => 1,
            'codIntegracaoFilial' => 54,
            'codIntegracaoContaPagar' => 12,
            'dscMotivoCancelamento' => 'A vida é bela'
        ];

        $populate = $cancelamento->populate((object)$data);

        $this->assertInstanceOf(CancelamentoContaPagar::class, $cancelamento);
        $this->assertEquals($data['codEmpresa'], $cancelamento->getCodEmpresa());
        $this->assertEquals($data['codIntegracaoFilial'], $cancelamento->getCodIntegracaoFilial());
        $this->assertEquals($data['codIntegracaoContaPagar'], $cancelamento->getCodIntegracaoContaPagar());
        $this->assertEquals($data['dscMotivoCancelamento'], $cancelamento->getDscMotivoCancelamento());

    }

}
