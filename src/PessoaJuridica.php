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
    protected $codEmpresa;

    /**
     * CNPJ da Empresa
     * @var string
     */
    protected $numCnpj;

    /**
     * Razão Social
     * @var string
     */
    protected $dscRazaoSocial;

    /**
     * Nome Fantasia
     * @var string
     */
    protected $nomFantasia;

    /**
     * Inscrição Estadual
     * @var string
     */
    protected $numInscEstadual;

    /**
     * Inscrição Municipal
     * @var string
     */
    protected $numInscMunicipal;

    /**
     * Endereço
     * @var string
     */
    protected $nomLogradouro;

    /**
     * Número
     * @var string
     */
    protected $numLogradouro;

    /**
     * Complemento
     * @var string
     */
    protected $dscComplemento;

    /**
     * Bairro
     * @var string
     */
    protected $nomBairro;

    /**
     * Localidade (Município / Distrito)
     * @var string
     */
    protected $nomLocalidade;

    /**
     * Sigla da UF
     * @var string
     */
    protected $sglUf;

    /**
     * Nº do CEP
     * @var string
     */
    protected $numCep;

    /**
     * Sigla do País
     * @var string
     */
    protected $sglPais;

    /**
     * Nº do DDD
     * @var string
     */
    protected $numDdd;

    /**
     * Nº do telefone (sem formatação)
     * @var string
     */
    protected $numTelefone;

    /**
     * Descrição de conta de e-mail
     * @var string
     */
    protected $dscEmail;

    /**
     * Dados do Banco da Pessoa
     * @var Banco
     */
    protected $dadosBancarios;


    /**
     * Método responsável por preencher os dados para o funcionamento da entidade de Pessoa Juridica.
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

        if (isset($data->dadosBancarios)) {
            $this->dadosBancarios = new Banco(
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
     * @return string
     */
    public function getNomFavorecido()
    {
        return $this->dadosBancarios->getNomFavorecido();
    }

    /**
     * @return string
     */
    public function getNumCpfCnpjFavorecido()
    {
        return $this->dadosBancarios->getNumCpfCnpjFavorecido();
    }

    /**
     * @return int
     */
    public function getNumBanco()
    {
        return $this->dadosBancarios->getNumBanco();
    }

    /**
     * @return int
     */
    public function getNumAgencia()
    {
        return $this->dadosBancarios->getNumAgencia();
    }

    /**
     * @return int
     */
    public function getNumContaCorrente()
    {
        return $this->dadosBancarios->getNumContaCorrente();
    }

    /**
     * @return string
     */
    public function getNumDigitoContaCorrente()
    {
        return $this->dadosBancarios->getNumDigitoContaCorrente();
    }

}