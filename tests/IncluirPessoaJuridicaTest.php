<?php
namespace Simonetti\Rovereti\Tests;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Simonetti\Rovereti\Client;
use Simonetti\Rovereti\IncluirPessoaJuridica;
use Simonetti\Rovereti\PessoaJuridica;

/**
 * Class IncluirPessoaJuridicaTest
 * @package Simonetti\Rovereti\Tests
 */
class IncluirPessoaJuridicaTest extends \PHPUnit_Framework_TestCase
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
        $pessoaJuridica = $this->getPessoaJuridica();

        $incluirPJ = new IncluirPessoaJuridica(new Client($this->guzzleClient));
        $response = $incluirPJ->execute('', $pessoaJuridica);

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testExecuteDeveRetornarStatusCode200()
    {
        $pessoaJuridica = $this->getPessoaJuridica();

        $incluirPJ = new IncluirPessoaJuridica(new Client($this->guzzleClient));
        $response = $incluirPJ->execute('PessoaJuridica/IncluirPessoaJuridica', $pessoaJuridica);

        $this->assertEquals(200, $response->getStatusCode());
    }

    private function getPessoaJuridica()
    {
        $pessoaJuridica = new PessoaJuridica();

        $data = [
            'codEmpresa' => 1012,
            'numCnpj' => '07.110.470/0001-57',
            'dscRazaoSocial' => 'RG PROVIDER',
            'nomFantasia' => 'RG PROVIDER LTDA',
            'numInscEstadual' => '924369',
            'numInscMunicipal' => '924369',
            'nomBairro' => 'Canário',
            'nomLocalidade' => 'Rua Das Andorinhas',
            'numLogradouro' => '1212212',
            'nomLogradouro' => 'RUA',
            'dscComplemento' => 'CASA',
            'sglPais' => 'casfsadfas',
            'sglUf' => 'ES',
            'numCep' => '29980-000',
            'numDdd' => '27',
            'numTelefone' => '9 9950-7998',
            'dscEmail' => 'basilioferraz10@gmail.com',
            'dadosBancarios' => (object)[
                'nomFavorecido' => 'Basilio Ferraz Pinto',
                'numCpfCnpjFavorecido' => '157.178.157-94',
                'numBanco' => '1',
                'numAgencia' => '5468',
                'numContaCorrente' => '1039',
                'numDigitoContaCorrente' => '1',
            ]
        ];

        $pessoaJuridica->populate((object)$data);

        return $pessoaJuridica;
    }
}
