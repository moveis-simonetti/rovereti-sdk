<?php

namespace Simonetti\Rovereti;


class TransferenciaCaixaBanco implements ToArrayInterface
{
    use ObjectToArray;

    /**
     * Código da empresa no Rovereti ERP
     * @var int
     */
    protected $codEmpresa;

    /**
     * Código da Filial na Simonetti
     * @var string
     */
    protected $codIntegracaoFilial;

    /**
     * Código da conta corrente na Simonetti
     * @var string
     */
    protected $codIntegracaoContaCorrente;

    /**
     * Data da transferência
     * @var string
     */
    protected $datTransferencia;

    /**
     * Valor da transferencia
     * @var float
     */
    protected $vlrTransferencia;

    /**
     * Código da transferência na Simonetti
     * @var string
     */
    protected $codIntegracaoTransferencia;

    /**
     * TransferenciaCaixaBanco constructor.
     * @param int $codEmpresa
     * @param string $codIntegracaoFilial
     * @param string $codIntegracaoContaCorrente
     * @param string $datTransferencia
     * @param float $vlrTransferencia
     * @param string $codIntegracaoTransferencia
     */
    public function __construct(
        int $codEmpresa,
        string $codIntegracaoFilial,
        string $codIntegracaoContaCorrente,
        string $datTransferencia,
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
     * @return string
     */
    public function getDatTransferencia(): string
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