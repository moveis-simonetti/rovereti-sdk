<?php

namespace Simonetti\Rovereti;

/**
 * Class Banco
 * @package Simonetti\Rovereti
 */
class Banco
{
    /**
     * @var string
     */
    protected $nomFavorecio;

    /**
     * @var string
     */
    protected $numCpfCnpjFavorecido;

    /**
     * @var int
     */
    protected $numBanco;

    /**
     * @var int
     */
    protected $numAgencia;

    /**
     * @var int
     */
    protected $numContaCorrente;

    /**
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
        $nomFavorecido,
        $numCpfCnpjFavorecido,
        $numBanco,
        $numAgencia,
        $numContaCorrente,
        $numDigitoContaCorrente = null
    ) {
        $this->nomFavorecio = $nomFavorecido;
        $this->numCpfCnpjFavorecido = $numCpfCnpjFavorecido;
        $this->numBanco = $numBanco;
        $this->numAgencia = $numAgencia;
        $this->numContaCorrente = $numContaCorrente;
        $this->numDigitoContaCorrente = $numDigitoContaCorrente;

    }

    /**
     * @return string
     */
    public function getNomFavorecio(): string
    {
        return $this->nomFavorecio;
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