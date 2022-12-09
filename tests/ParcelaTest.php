<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\Parcela;

/**
 * Class ParcelaTest
 * @package Simonetti\Rovereti\Tests
 */
class ParcelaTest extends \PHPUnit\Framework\TestCase
{
    public function testValidateInstance()
    {
        $parcela = new Parcela(
            1,
            '26/01/2018',
            '5000.01'
        );

        $this->assertInstanceOf(Parcela::class, $parcela);
        $this->assertEquals(1, $parcela->getNumParcela());
        $this->assertEquals('26/01/2018', $parcela->getDatVencimento());
        $this->assertEquals('5000.01', $parcela->getVlrParcela());
    }
}
