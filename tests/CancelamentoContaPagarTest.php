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
        $cancelamento = new CancelamentoContaPagar(
            10,
            2,
            10,
            'A vida é bela'
        );

        $this->assertInstanceOf(CancelamentoContaPagar::class, $cancelamento);
        $this->assertEquals(10, $cancelamento->getCodEmpresa());
        $this->assertEquals(2, $cancelamento->getCodIntegracaoFilial());
        $this->assertEquals(10, $cancelamento->getCodIntegracaoContaPagar());
        $this->assertEquals('A vida é bela', $cancelamento->getDscMotivoCancelamento());

    }

}
