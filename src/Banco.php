<?php

namespace Simonetti\Rovereti;

/**
 * Class Banco
 * @package Simonetti\Rovereti
 */
class Banco implements ToArrayInterface
{
    use ObjectToArray;

    /**
     * Nome do Favorecido
     * @var string
     */
    protected $nomFavorecido;

    /**
     * CPF / CNPJ do Favorecido (sem formatação)
     * @var string
     */
    protected $numCpfCnpjFavorecido;

    /**
     * Nº do Banco
     * @var int
     */
    protected $numBanco;

    /**
     * Nº da Agência bancária
     * @var int
     */
    protected $numAgencia;

    /**
     * Nº da Conta Corrente
     * @var int
     */
    protected $numContaCorrente;

    /**
     * Nº do dígito da Conta Corrente
     * @var string
     */
    protected $numDigitoContaCorrente;

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
        $this->nomFavorecido = $nomFavorecido;
        $this->numCpfCnpjFavorecido = $numCpfCnpjFavorecido;
        $this->numBanco = $numBanco;
        $this->numAgencia = $numAgencia;
        $this->numContaCorrente = $numContaCorrente;
        $this->numDigitoContaCorrente = $numDigitoContaCorrente;

    }

    /**
     * @return string
     */
    public function getNomFavorecido(): string
    {
        return $this->nomFavorecido;
    }

    /**
     * @return string
     */
    public function getNumCpfCnpjFavorecido(): string
    {
        return $this->numCpfCnpjFavorecido;
    }

    /**
     * @return int
     */
    public function getNumBanco(): int
    {
        return $this->numBanco;
    }

    /**
     * @return int
     */
    public function getNumAgencia(): int
    {
        return $this->numAgencia;
    }

    /**
     * @return int
     */
    public function getNumContaCorrente(): int
    {
        return $this->numContaCorrente;
    }

    /**
     * @return string
     */
    public function getNumDigitoContaCorrente(): string
    {
        return $this->numDigitoContaCorrente;
    }

}