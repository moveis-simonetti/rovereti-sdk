<?php
namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\IncluirPessoaJuridica;
use Simonetti\Rovereti\PessoaJuridica;

/**
 * Class IncluirPessoaJuridicaTest
 * @package Simonetti\Rovereti\Tests
 */
class IncluirPessoaJuridicaTest extends AbstractClientTestCase
{
    /**
     * @expectedException \Exception
     * @expectedExceptionMessage URI não informada
     */
    public function testPostDeveLancarExceptionSeNaoPassarURI()
    {
        $pessoaJuridica = $this->getPessoaJuridica();

        $incluirPJ = new IncluirPessoaJuridica($this->getClient());
        $incluirPJ->execute('', $pessoaJuridica);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 401
     * @expectedExceptionMessage 401 Unauthorized
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForAutorizado()
    {
        $pessoaJuridica = $this->getPessoaJuridica();

        $incluirPJ = new IncluirPessoaJuridica($this->getClient(401));
        $incluirPJ->execute('PessoaJuridica/IncluirPessoaJuridica', $pessoaJuridica);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 404
     * @expectedExceptionMessage 404 Not Found
     */
    public function testExecuteDeveLancarExceptionSeRecursoNaoForEncontrado()
    {
        $pessoaJuridica = $this->getPessoaJuridica();

        $incluirPJ = new IncluirPessoaJuridica($this->getClient(404));
        $incluirPJ->execute('PessoaJuridica/IncluirPessoaJuridica', $pessoaJuridica);
    }

    public function testExecuteDeveRetornarStatusCode200()
    {
        $pessoaJuridica = $this->getPessoaJuridica();

        $incluirPJ = new IncluirPessoaJuridica($this->getClient());
        $response = $incluirPJ->execute('PessoaJuridica/IncluirPessoaJuridica', $pessoaJuridica);

        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * @return PessoaJuridica
     */
    private function getPessoaJuridica()
    {
        $pessoaJuridica = new PessoaJuridica();

        $data = [
            'codEmpresa' => 1012,
            'numCnpj' => '07.110.470/0001-57',
            'razaoSocial' => 'RG PROVIDER',
            'nomFantasia' => 'RG PROVIDER LTDA',
            'numInscricaoEstadual' => '924369',
            'numInscricaoMunicipal' => '924369',
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
