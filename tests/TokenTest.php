<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\Token;

class TokenTest extends \PHPUnit_Framework_TestCase
{
    public function testValidateToken()
    {
        $user = 'UserTest';
        $key = 123456;

        $token = new Token($user, $key);

        $tokenEsperado = sha1($user . $key . 'ServiceToken' . date('d/m/Y'));

        $this->assertInstanceOf(Token::class, $token);
        $this->assertEquals($tokenEsperado, $token->getToken());
        $this->assertEquals($user, $token->getUser());
        $this->assertEquals($key, $token->getKey());
    }
}
