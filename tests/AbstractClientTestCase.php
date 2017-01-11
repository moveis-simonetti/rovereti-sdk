<?php
namespace Simonetti\Rovereti\Tests;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Simonetti\Rovereti\Client;
use Simonetti\Rovereti\Token;

class AbstractClientTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @param int $statusCode
     * @return Client
     */
    public function getClient($statusCode = 200)
    {
        $mock = new MockHandler([
            new Response($statusCode, ['X-Foo' => 'Bar']),
        ]);

        $handler = HandlerStack::create($mock);

        $guzzleClient = new GuzzleClient(['handler' => $handler]);
        $token = new Token('UserTest', 123456);

        return new Client($guzzleClient, $token);
    }
}