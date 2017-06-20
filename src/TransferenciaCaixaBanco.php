<?php

namespace Simonetti\Rovereti;


class TransferenciaCaixaBanco implements ToArrayInterface
{
    use ObjectDataUtil;

    /**
     * Código da empresa no Rovereti ERP
     * @var int
     */
    protected $CodEmpresa;

    /**
     * Código da Filial 
     * @var string
     */
    protected $CodIntegracaoFilial;

    /**
     * Código da conta corrente 
     * @var string
     */
    protected $CodIntegracaoContaCorrente;

    /**
     * Data da transferência
     * @var string
     */
    protected $DatTransferencia;

    /**
     * Valor da transferencia
     * @var float
     */
    protected $VlrTransferencia;

    /**
     * Código da transferência 
     * @var string
     */
    protected $CodIntegracaoTransferencia;


    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->CodEmpresa = $data->codEmpresa;
        $this->CodIntegracaoFilial = $data->codIntegracaoFilial;
        $this->CodIntegracaoContaCorrente = $data->codIntegracaoContaCorrente;
        $this->DatTransferencia = $data->datTransferencia;
        $this->VlrTransferencia = $data->vlrTransferencia;
        $this->CodIntegracaoTransferencia = $data->codIntegracaoTransferencia;
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
    public function getCodIntegracaoFilial(): string
    {
        return $this->CodIntegracaoFilial;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoContaCorrente(): string
    {
        return $this->CodIntegracaoContaCorrente;
    }

    /**
     * @return string
     */
    public function getDatTransferencia(): string
    {
        return $this->DatTransferencia;
    }

    /**
     * @return float
     */
    public function getVlrTransferencia(): float
    {
        return $this->VlrTransferencia;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoTransferencia(): string
    {
        return $this->CodIntegracaoTransferencia;
    }
}