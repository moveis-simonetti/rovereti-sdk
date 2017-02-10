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
     * Código da Filial 
     * @var string
     */
    protected $codIntegracaoFilial;

    /**
     * Código da conta corrente 
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
     * Código da transferência 
     * @var string
     */
    protected $codIntegracaoTransferencia;


    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->codEmpresa = $data->codEmpresa;
        $this->codIntegracaoFilial = $data->codIntegracaoFilial;
        $this->codIntegracaoContaCorrente = $data->codIntegracaoContaCorrente;
        $this->datTransferencia = $data->datTransferencia;
        $this->vlrTransferencia = $data->vlrTransferencia;
        $this->codIntegracaoTransferencia = $data->codIntegracaoTransferencia;
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