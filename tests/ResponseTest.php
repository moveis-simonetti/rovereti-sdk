<?php
namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\Response;

/**
 * Class ResponseTest
 * @package Simonetti\Rovereti\Tests
 */
class ResponseTest extends \PHPUnit\Framework\TestCase
{
    public function testJsonSerializeResponse()
    {
        $data = [
            'statusCode' => 200,
            'contents' => 'test',
        ];

        $guzzleResponse = new \GuzzleHttp\Psr7\Response(200, [], 'test');

        $response = new Response($guzzleResponse);

        $this->assertJsonStringEqualsJsonString(json_encode($response, JSON_THROW_ON_ERROR), json_encode($data));
    }
}