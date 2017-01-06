<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\Banco;

class BancoTest extends \PHPUnit_Framework_TestCase
{

    public function testValidateInstance()
    {
        $banco = new Banco(
            'Basilio Ferraz Pinto',
            '157.178.157.94',
            '1',
            '5468',
            '1039',
            '1'
        );

        $this->assertInstanceOf(Banco::class, $banco);
        $this->assertEquals('Basilio Ferraz Pinto', $banco->getNomFavorecido());
        $this->assertEquals('157.178.157.94', $banco->getNumCpfCnpjFavorecido());
        $this->assertEquals('1', $banco->getNumBanco());
        $this->assertEquals('5468', $banco->getNumAgencia());
        $this->assertEquals('1039', $banco->getNumContaCorrente());
        $this->assertEquals('1', $banco->getNumDigitoContaCorrente());
    }
}
