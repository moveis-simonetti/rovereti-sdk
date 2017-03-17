<?php

namespace Simonetti\Rovereti;

/**
 * Class PessoaJuridica
 * @package Simonetti\Rovereti
 */
class PessoaJuridica implements ToArrayInterface
{
    use ObjectToArray;

    /**
     * Código da empresa no Rovereti ERP
     * @var int
     */
    protected $CodEmpresa;

    /**
     * CNPJ da Empresa
     * @var string
     */
    protected $NumCnpj;

    /**
     * Razão Social
     * @var string
     */
    protected $DscRazaoSocial;

    /**
     * Nome Fantasia
     * @var string
     */
    protected $NomFantasia;

    /**
     * Inscrição Estadual
     * @var string
     */
    protected $NumInscEstadual;

    /**
     * Inscrição Municipal
     * @var string
     */
    protected $NumInscMunicipal;

    /**
     * Endereço
     * @var string
     */
    protected $NomLogradouro;

    /**
     * Número
     * @var string
     */
    protected $NumLogradouro;

    /**
     * Complemento
     * @var string
     */
    protected $DscComplemento;

    /**
     * Bairro
     * @var string
     */
    protected $NomBairro;

    /**
     * Localidade (Município / Distrito)
     * @var string
     */
    protected $NomLocalidade;

    /**
     * Sigla da UF
     * @var string
     */
    protected $SglUf;

    /**
     * Nº do CEP
     * @var string
     */
    protected $NumCep;

    /**
     * Sigla do País
     * @var string
     */
    protected $SglPais;

    /**
     * Nº do DDD
     * @var string
     */
    protected $NumDdd;

    /**
     * Nº do telefone (sem formatação)
     * @var string
     */
    protected $NumTelefone;

    /**
     * Descrição de conta de e-mail
     * @var string
     */
    protected $DscEmail;

    /**
     * Dados do Banco da Pessoa
     * @var Banco
     */
    protected $DadosBancarios;


    /**
     * Método responsável por preencher os dados para o funcionamento da entidade de Pessoa Juridica.
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->CodEmpresa = $data->codEmpresa;
        $this->NumCnpj = $data->numCnpj;
        $this->DscRazaoSocial = $data->dscRazaoSocial;
        $this->NomFantasia = $data->nomFantasia;
        $this->NumInscEstadual = (isset($data->numInscEstadual)) ? $data->numInscEstadual : null;
        $this->NumInscMunicipal = (isset($data->numInscMunicipal)) ? $data->numInscMunicipal : null;
        $this->NomLogradouro = (isset($data->nomLogradouro)) ? $data->nomLogradouro : null;
        $this->NumLogradouro = (isset($data->numLogradouro)) ? $data->numLogradouro : null;
        $this->DscComplemento = (isset($data->dscComplemento)) ? $data->dscComplemento : null;
        $this->NomBairro = (isset($data->nomBairro)) ? $data->nomBairro : null;
        $this->NomLocalidade = (isset($data->nomLocalidade)) ? $data->nomLocalidade : null;
        $this->SglPais = (isset($data->sglPais)) ? $data->sglPais : null;
        $this->SglUf = (isset($data->sglUf)) ? $data->sglUf : null;
        $this->NumCep = (isset($data->numCep)) ? $data->numCep : null;
        $this->NumDdd = (isset($data->numDdd)) ? $data->numDdd : null;
        $this->NumTelefone = (isset($data->numTelefone)) ? $data->numTelefone : null;
        $this->DscEmail = (isset($data->dscEmail)) ? $data->dscEmail : null;

        if (isset($data->dadosBancarios)) {
            $this->DadosBancarios = new Banco(
                $data->dadosBancarios->nomFavorecido,
                $data->dadosBancarios->numCpfCnpjFavorecido,
                $data->dadosBancarios->numBanco,
                $data->dadosBancarios->numAgencia,
                $data->dadosBancarios->numContaCorrente,
                $data->dadosBancarios->numDigitoContaCorrente
            );
        }
    }

    /**
     * @return int
     */
    public function getCodEmpresa(): int
    {
        return $this->CodEmpresa;
    }

    /**
     * @return string
     */
    public function getNumCnpj(): string
    {
        return $this->NumCnpj;
    }

    /**
     * @return string
     */
    public function getDscRazaoSocial(): string
    {
        return $this->DscRazaoSocial;
    }

    /**
     * @return string
     */
    public function getNomFantasia(): string
    {
        return $this->NomFantasia;
    }

    /**
     * @return string
     */
    public function getNumInscEstadual(): string
    {
        return $this->NumInscEstadual;
    }

    /**
     * @return string
     */
    public function getNumInscMunicipal(): string
    {
        return $this->NumInscMunicipal;
    }

    /**
     * @return string
     */
    public function getNomLogradouro(): string
    {
        return $this->NomLogradouro;
    }

    /**
     * @return string
     */
    public function getNumLogradouro(): string
    {
        return $this->NumLogradouro;
    }

    /**
     * @return string
     */
    public function getDscComplemento(): string
    {
        return $this->DscComplemento;
    }

    /**
     * @return string
     */
    public function getNomBairro(): string
    {
        return $this->NomBairro;
    }

    /**
     * @return string
     */
    public function getNomLocalidade(): string
    {
        return $this->NomLocalidade;
    }

    /**
     * @return string
     */
    public function getSglUf(): string
    {
        return $this->SglUf;
    }

    /**
     * @return string
     */
    public function getNumCep(): string
    {
        return $this->NumCep;
    }

    /**
     * @return string
     */
    public function getSglPais(): string
    {
        return $this->SglPais;
    }

    /**
     * @return string
     */
    public function getNumDdd(): string
    {
        return $this->NumDdd;
    }

    /**
     * @return string
     */
    public function getNumTelefone(): string
    {
        return $this->NumTelefone;
    }

    /**
     * @return string
     */
    public function getDscEmail(): string
    {
        return $this->DscEmail;
    }

    /**
     * @return string
     */
    public function getNomFavorecido()
    {
        return $this->DadosBancarios->getNomFavorecido();
    }

    /**
     * @return string
     */
    public function getNumCpfCnpjFavorecido()
    {
        return $this->DadosBancarios->getNumCpfCnpjFavorecido();
    }

    /**
     * @return int
     */
    public function getNumBanco()
    {
        return $this->DadosBancarios->getNumBanco();
    }

    /**
     * @return int
     */
    public function getNumAgencia()
    {
        return $this->DadosBancarios->getNumAgencia();
    }

    /**
     * @return int
     */
    public function getNumContaCorrente()
    {
        return $this->DadosBancarios->getNumContaCorrente();
    }

    /**
     * @return string
     */
    public function getNumDigitoContaCorrente()
    {
        return $this->DadosBancarios->getNumDigitoContaCorrente();
    }
}