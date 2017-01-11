<?php
namespace Simonetti\Rovereti\Tests;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Simonetti\Rovereti\Client;
use Simonetti\Rovereti\Token;

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

    /**
     * @var Token
     */
    protected $token;

    public function setUp()
    {
        $mock = new MockHandler([
            new Response(200, ['X-Foo' => 'Bar']),
        ]);

        $handler = HandlerStack::create($mock);

        $this->guzzleClient = new GuzzleClient(['handler' => $handler]);
        $this->token = new Token('UserTest', 123456);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage URI não informada
     */
    public function testPostDeveLancarExceptionSeNaoPassarURI()
    {
        $client = new Client($this->guzzleClient, $this->token);

        $data = [];

        $client->post('', $data);
    }

    public function testPostDeveRetornarStatusCode200()
    {
        $client = new Client($this->guzzleClient, $this->token);

        $data = [];

        $response = $client->post('/test', $data);

        $this->assertEquals(200, $response->getStatusCode());
    }
}
