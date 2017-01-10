<?php
namespace Simonetti\Rovereti\Tests;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Simonetti\Rovereti\Client;

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

        return new Client(new GuzzleClient(['handler' => $handler]));
    }
}