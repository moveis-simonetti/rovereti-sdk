<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\Token;

class TokenTest extends \PHPUnit_Framework_TestCase
{

    public function testValidateToken()
    {
        $token = new Token(
            'INTEGRADOR',
            2186
        );

        $value = sha1('INTEGRADOR2186ServiceToken10/01/2017');

        $this->assertInstanceOf(Token::class, $token);
        $this->assertEquals($value, $token->getToken());
    }

}
