<?php
namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\Response;

/**
 * Class ResponseTest
 * @package Simonetti\Rovereti\Tests
 */
class ResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testJsonSerializeResponse()
    {
        $data = [
            'statusCode' => 200,
            'contents' => 'test',
        ];

        $guzzleResponse = new \GuzzleHttp\Psr7\Response(200, [], 'test');

        $response = new Response($guzzleResponse);

        $this->assertJsonStringEqualsJsonString(json_encode($response), json_encode($data));
    }
}