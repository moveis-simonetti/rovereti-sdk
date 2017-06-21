<?php

namespace Simonetti\Rovereti;

/**
 * Class Banco
 * @package Simonetti\Rovereti
 */
class Banco implements ToArrayInterface
{
    use ObjectDataUtil;

    /**
     * Nome do Favorecido
     * @var string
     */
    protected $NomFavorecido;

    /**
     * CPF / CNPJ do Favorecido (sem formatação)
     * @var string
     */
    protected $NumCpfCnpjFavorecido;

    /**
     * Nº do Banco
     * @var int
     */
    protected $NumBanco;

    /**
     * Nº da Agência bancária
     * @var int
     */
    protected $NumAgencia;

    /**
     * Nº da Conta Corrente
     * @var int
     */
    protected $NumContaCorrente;

    /**
     * Nº do dígito da Conta Corrente
     * @var string
     */
    protected $NumDigitoContaCorrente;

    /**
     * Banco constructor.
     * @param string $nomFavorecido
     * @param string $numCpfCnpjFavorecido
     * @param int $numBanco
     * @param int $numAgencia
     * @param int $numContaCorrente
     * @param string|null $numDigitoContaCorrente
     */
    public function __construct(
        string $nomFavorecido,
        string $numCpfCnpjFavorecido,
        int $numBanco,
        int $numAgencia,
        int $numContaCorrente,
        string $numDigitoContaCorrente = null
    ) {
        $this->NomFavorecido = $nomFavorecido;
        $this->NumCpfCnpjFavorecido = $numCpfCnpjFavorecido;
        $this->NumBanco = $numBanco;
        $this->NumAgencia = $numAgencia;
        $this->NumContaCorrente = $numContaCorrente;
        $this->NumDigitoContaCorrente = $numDigitoContaCorrente;

    }

    /**
     * @return string
     */
    public function getNomFavorecido(): string
    {
        return $this->NomFavorecido;
    }

    /**
     * @return string
     */
    public function getNumCpfCnpjFavorecido(): string
    {
        return $this->NumCpfCnpjFavorecido;
    }

    /**
     * @return int
     */
    public function getNumBanco(): int
    {
        return $this->NumBanco;
    }

    /**
     * @return int
     */
    public function getNumAgencia(): int
    {
        return $this->NumAgencia;
    }

    /**
     * @return int
     */
    public function getNumContaCorrente(): int
    {
        return $this->NumContaCorrente;
    }

    /**
     * @return string
     */
    public function getNumDigitoContaCorrente(): string
    {
        return $this->NumDigitoContaCorrente;
    }

}