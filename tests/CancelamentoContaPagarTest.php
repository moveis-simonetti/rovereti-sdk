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
        $cancelamentoContaPagar = new CancelamentoContaPagar(
            10,
            2,
            10,
            'A vida é bela'
        );

        $this->assertInstanceOf(CancelamentoContaPagar::class, $cancelamentoContaPagar);
        $this->assertEquals(10, $cancelamentoContaPagar->getCodEmpresa());
        $this->assertEquals(2, $cancelamentoContaPagar->getCodIntegracaoFilial());
        $this->assertEquals(10, $cancelamentoContaPagar->getCodIntegracaoContaPagar());
        $this->assertEquals('A vida é bela', $cancelamentoContaPagar->getDscMotivoCancelamento());

    }

}
