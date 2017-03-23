<?php
namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\ObjectToArray;
use Simonetti\Rovereti\ToArrayInterface;

class ToArrayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Propriedade "prop3" com valor inválido na classe
     */
    public function testToArrayDeveLancarExceptionSePropriedadeForInvalida()
    {
        /**
         * @var $objeto ToArrayInterface
         */
        $objeto = (new class() implements ToArrayInterface
        {
            use ObjectToArray;

            protected $prop1;
            protected $prop2;
            protected $prop3;

            public function __construct()
            {
                $this->prop1 = 'test';
                $this->prop2 = 123;
                $this->prop3 = [];
            }
        });

        $objeto->toArray();
    }
}