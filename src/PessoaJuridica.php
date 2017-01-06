<?php

namespace Simonetti\Rovereti;

/**
 * Class PessoaJuridica
 * @package Simonetti\Rovereti
 */
class PessoaJuridica
{
    /**
     * @var int
     */
    protected $codEmpresa;

    /**
     * @var string
     */
    protected $numCnpj;

    /**
     * @var string
     */
    protected $dscRazaoSocial;

    /**
     * @var string
     */
    protected $nomFantasia;

    /**
     * @var string
     */
    protected $numInscEstadual;

    /**
     * @var string
     */
    protected $numInscMunicipal;

    /**
     * @var string
     */
    protected $nomLogradouro;

    /**
     * @var string
     */
    protected $numLogradouro;

    /**
     * @var string
     */
    protected $dscComplemento;

    /**
     * @var string
     */
    protected $nomBairro;

    /**
     * @var string
     */
    protected $nomLocalidade;

    /**
     * @var string
     */
    protected $sglUf;

    /**
     * @var string
     */
    protected $numCep;

    /**
     * @var string
     */
    protected $sglPais;

    /**
     * @var string
     */
    protected $numDdd;

    /**
     * @var string
     */
    protected $numTelefone;

    /**
     * @var string
     */
    protected $dscEmail;

    /**
     * @var Banco
     */
    protected $dadosBancario;


    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->codEmpresa = $data->codEmpresa;
        $this->numCnpj = $data->numCnpj;
        $this->dscRazaoSocial = $data->dscRazaoSocial;
        $this->nomFantasia = $data->nomFantasia;
        $this->numInscEstadual = (isset($data->numInscEstadual)) ? $data->numInscEstadual : null;
        $this->numInscMunicipal = (isset($data->numInscMunicipal)) ? $data->numInscMunicipal : null;
        $this->nomLogradouro = (isset($data->nomLogradouro)) ? $data->nomLogradouro : null;
        $this->numLogradouro = (isset($data->numLogradouro)) ? $data->numLogradouro : null;
        $this->dscComplemento = (isset($data->dscComplemento)) ? $data->dscComplemento : null;
        $this->nomBairro = (isset($data->nomBairro)) ? $data->nomBairro : null;
        $this->nomLocalidade = (isset($data->nomLocalidade)) ? $data->nomLocalidade : null;
        $this->sglPais = (isset($data->sglPais)) ? $data->sglPais : null;
        $this->sglUf = (isset($data->sglUf)) ? $data->sglUf : null;
        $this->numCep = (isset($data->numCep)) ? $data->numCep : null;
        $this->numDdd = (isset($data->numDdd)) ? $data->numDdd : null;
        $this->numTelefone = (isset($data->numTelefone)) ? $data->numTelefone : null;
        $this->dscEmail = (isset($data->dscEmail)) ? $data->dscEmail : null;

        $this->dadosBancario = new Banco(
            $data->nomFavorecido,
            $data->numCpfCnpjFavorecido,
            $data->numBanco,
            $data->numAgencia,
            $data->numContaCorrente,
            $data->numDigitoContaCorrente
        );
    }

    /**
     * @return int
     */
    public function getCodEmpresa(): int
    {
        return $this->codEmpresa;
    }

    /**
     * @return string
     */
    public function getNumCnpj(): string
    {
        return $this->numCnpj;
    }

    /**
     * @return string
     */
    public function getDscRazaoSocial(): string
    {
        return $this->dscRazaoSocial;
    }

    /**
     * @return string
     */
    public function getNomFantasia(): string
    {
        return $this->nomFantasia;
    }

    /**
     * @return string
     */
    public function getNumInscEstadual(): string
    {
        return $this->numInscEstadual;
    }

    /**
     * @return string
     */
    public function getNumInscMunicipal(): string
    {
        return $this->numInscMunicipal;
    }

    /**
     * @return string
     */
    public function getNomLogradouro(): string
    {
        return $this->nomLogradouro;
    }

    /**
     * @return string
     */
    public function getNumLogradouro(): string
    {
        return $this->numLogradouro;
    }

    /**
     * @return string
     */
    public function getDscComplemento(): string
    {
        return $this->dscComplemento;
    }

    /**
     * @return string
     */
    public function getNomBairro(): string
    {
        return $this->nomBairro;
    }

    /**
     * @return string
     */
    public function getNomLocalidade(): string
    {
        return $this->nomLocalidade;
    }

    /**
     * @return string
     */
    public function getSglUf(): string
    {
        return $this->sglUf;
    }

    /**
     * @return string
     */
    public function getNumCep(): string
    {
        return $this->numCep;
    }

    /**
     * @return string
     */
    public function getSglPais(): string
    {
        return $this->sglPais;
    }

    /**
     * @return string
     */
    public function getNumDdd(): string
    {
        return $this->numDdd;
    }

    /**
     * @return string
     */
    public function getNumTelefone(): string
    {
        return $this->numTelefone;
    }

    /**
     * @return string
     */
    public function getDscEmail(): string
    {
        return $this->dscEmail;
    }

    /**
     * @return Banco
     */
    public function getDadosBancario(): Banco
    {
        return $this->dadosBancario;
    }

}