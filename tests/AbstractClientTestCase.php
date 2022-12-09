<?php
namespace Simonetti\Rovereti\Tests;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Simonetti\Rovereti\Client;
use Simonetti\Rovereti\Token;

class AbstractClientTestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @param int $statusCode
     */
    public function getClient($statusCode = 200): Client
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
