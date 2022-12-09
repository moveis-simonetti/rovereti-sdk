<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\ObjectDataUtil;
use Simonetti\Rovereti\ToArrayInterface;

class ObjectDataUtilsTest extends \PHPUnit\Framework\TestCase
{
    use AssertAttributeEqualsTrait;

    public function testToArrayDeveLancarExceptionSePropriedadeForInvalida(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Propriedade "prop3" com valor inválido na classe');
        /**
         * @var $objeto ToArrayInterface
         */
        $objeto = (new class() implements ToArrayInterface {
            use ObjectDataUtil;

            protected $prop1 = 'test';
            protected $prop2 = 123;
            protected $prop3;

            public function __construct()
            {
                $this->prop3 = new \stdClass();
            }
        });

        $objeto->toArray();
    }

    public function testToArrayDeveIgnorarPropriedadesNulas(): void
    {
        /**
         * @var $objeto ToArrayInterface
         */
        $objeto = (new class() implements ToArrayInterface {
            use ObjectDataUtil;

            protected $prop1 = 'test';
            protected $prop2 = 123;
            protected $prop3 = null;
            protected $prop4;

            public function __construct()
            {
            }
        });

        $array = $objeto->toArray();

        $this->assertArrayHasKey('prop1', $array);
        $this->assertArrayHasKey('prop2', $array);
        $this->assertArrayNotHasKey('prop3', $array);
        $this->assertArrayNotHasKey('prop4', $array);
    }

    public function testDeveChamarCallBackParaPopularRecursivamente(): void
    {
        $objeto = (new class() implements ToArrayInterface {
            use ObjectDataUtil;

            protected $Prop1;
            protected $Prop2;
            public $Prop3;
            protected $Prop4;

            public function getProp3()
            {
                return $this->Prop3;
            }

            public function populateMap(string $key, $value)
            {
                if ('prop3' != $key) {
                    return $value;
                }

                $objeto = (new class() implements ToArrayInterface {
                    use ObjectDataUtil;

                    protected $prop1;
                    protected $prop2;
                });

                return $objeto->populate((object) $value);
            }
        });

        $data = [
            'prop1' => 'a',
            'prop2' => 'a',
            'prop3' => [
                'prop1' => 'b',
                'prop2' => 'b',
            ],
            'prop4' => 'a',
        ];

        $objeto->populate((object) $data);

        $this->assertAttributeEquals($data['prop1'], 'Prop1', $objeto);
        $this->assertAttributeEquals($data['prop2'], 'Prop2', $objeto);

        $this->assertAttributeEquals($data['prop3']['prop1'], 'Prop1', $objeto->getProp3());
        $this->assertAttributeEquals($data['prop3']['prop2'], 'Prop2', $objeto->getProp3());

        $this->assertAttributeEquals($data['prop4'], 'Prop4', $objeto);
    }
}
