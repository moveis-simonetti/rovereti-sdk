<?php
namespace Simonetti\Rovereti\Tests;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Simonetti\Rovereti\Client;

/**
 * Class ClientTest
 * @package Simonetti\Rovereti\Tests
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GuzzleClient
     */
    protected $guzzleClient;

    public function setUp()
    {
        $mock = new MockHandler([
            new Response(200, ['X-Foo' => 'Bar']),
        ]);

        $handler = HandlerStack::create($mock);

        $this->guzzleClient = new GuzzleClient(['handler' => $handler]);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage URI não informada
     */
    public function testPostDeveLancarExceptionSeNaoPassarURI()
    {
        $client = new Client($this->guzzleClient);

        $data = [];

        $response = $client->post((object)$data);

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testPostDeveRetornarStatusCode200()
    {
        $client = new Client($this->guzzleClient);

        $data = [
            'uri' => '/test',
        ];

        $response = $client->post((object)$data);

        $this->assertEquals(200, $response->getStatusCode());
    }
}
