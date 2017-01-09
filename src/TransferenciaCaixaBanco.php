<?php

namespace Simonetti\Rovereti;


class TransferenciaCaixaBanco
{
    /**
     * @var int
     */
    protected $codEmpresa;

    /**
     * @var string
     */
    protected $codIntegracaoFilial;

    /**
     * @var string
     */
    protected $codIntegracaoContaCorrente;

    /**
     * @var \DateTime
     */
    protected $datTransferencia;

    /**
     * @var float
     */
    protected $vlrTransferencia;

    /**
     * @var string
     */
    protected $codIntegracaoTransferencia;

    /**
     * TransferenciaCaixaBanco constructor.
     * @param int $codEmpresa
     * @param string $codIntegracaoFilial
     * @param string $codIntegracaoContaCorrente
     * @param \DateTime $datTransferencia
     * @param float $vlrTransferencia
     * @param string $codIntegracaoTransferencia
     */
    public function __construct(
        int $codEmpresa,
        string $codIntegracaoFilial,
        string $codIntegracaoContaCorrente,
        \DateTime $datTransferencia,
        float $vlrTransferencia,
        string $codIntegracaoTransferencia
    ) {
        $this->codEmpresa = $codEmpresa;
        $this->codIntegracaoFilial = $codIntegracaoFilial;
        $this->codIntegracaoContaCorrente = $codIntegracaoContaCorrente;
        $this->datTransferencia = $datTransferencia;
        $this->vlrTransferencia = $vlrTransferencia;
        $this->codIntegracaoTransferencia = $codIntegracaoTransferencia;
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
    public function getCodIntegracaoFilial(): string
    {
        return $this->codIntegracaoFilial;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoContaCorrente(): string
    {
        return $this->codIntegracaoContaCorrente;
    }

    /**
     * @return \DateTime
     */
    public function getDatTransferencia(): \DateTime
    {
        return $this->datTransferencia;
    }

    /**
     * @return float
     */
    public function getVlrTransferencia(): float
    {
        return $this->vlrTransferencia;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoTransferencia(): string
    {
        return $this->codIntegracaoTransferencia;
    }
}