<?php
namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\PessoaJuridica;

class PessoaJuridicaTest extends \PHPUnit_Framework_TestCase
{

    public function testPopulate()
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
            'nomFavorecido' => 'Basilio Ferraz Pinto',
            'numCpfCnpjFavorecido' => '157.178.157-94',
            'numBanco' => '1',
            'numAgencia' => '5468',
            'numContaCorrente' => '1039',
            'numDigitoContaCorrente' => '1',
        ];

        $pessoaJuridica->populate((object)$data);

        $this->assertEquals($data['codEmpresa'], $pessoaJuridica->getCodEmpresa());
        $this->assertEquals($data['numCnpj'], $pessoaJuridica->getNumCnpj());
        $this->assertEquals($data['dscRazaoSocial'], $pessoaJuridica->getDscRazaoSocial());
        $this->assertEquals($data['nomFantasia'], $pessoaJuridica->getNomFantasia());
        $this->assertEquals($data['numInscEstadual'], $pessoaJuridica->getNumInscEstadual());
        $this->assertEquals($data['numInscMunicipal'], $pessoaJuridica->getNumInscMunicipal());
        $this->assertEquals($data['nomBairro'], $pessoaJuridica->getNomBairro());
        $this->assertEquals($data['nomLocalidade'], $pessoaJuridica->getNomLocalidade());
        $this->assertEquals($data['nomLogradouro'], $pessoaJuridica->getNomLogradouro());
        $this->assertEquals($data['numLogradouro'], $pessoaJuridica->getNumLogradouro());
        $this->assertEquals($data['sglUf'], $pessoaJuridica->getSglUf());
        $this->assertEquals($data['numCep'], $pessoaJuridica->getNumCep());
        $this->assertEquals($data['dscComplemento'], $pessoaJuridica->getDscComplemento());
        $this->assertEquals($data['sglPais'], $pessoaJuridica->getSglPais());
        $this->assertEquals($data['numDdd'], $pessoaJuridica->getNumDdd());
        $this->assertEquals($data['numTelefone'], $pessoaJuridica->getNumTelefone());
        $this->assertEquals($data['dscEmail'], $pessoaJuridica->getDscEmail());


        $this->assertEquals($data['nomFavorecido'], $pessoaJuridica->getNomFavorecido());
        $this->assertEquals($data['numCpfCnpjFavorecido'], $pessoaJuridica->getNumCpfCnpjFavorecido());
        $this->assertEquals($data['numBanco'], $pessoaJuridica->getNumBanco());
        $this->assertEquals($data['numAgencia'], $pessoaJuridica->getNumAgencia());
        $this->assertEquals($data['numContaCorrente'], $pessoaJuridica->getNumContaCorrente());
        $this->assertEquals($data['numDigitoContaCorrente'], $pessoaJuridica->getNumDigitoContaCorrente());
    }

}
