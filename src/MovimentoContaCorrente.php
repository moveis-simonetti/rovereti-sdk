<?php

namespace Simonetti\Rovereti;

class MovimentoContaCorrente implements ToArrayInterface
{
    use ObjectToArray;

    /**
     * Código da empresa no Rovereti ERP
     * @var int
     */
    protected $CodEmpresa;

    /**
     * Código da conta corrente 
     * @var string
     */
    protected $CodIntegracaoContaCorrente;

    /**
     * Tipo de movimento (D/C)
     * @var string
     */
    protected $CodTipoMovto;

    /**
     * Data do movimento
     * @var string
     */
    protected $DatMovimento;

    /**
     * Valor do movimento
     * @var float
     */
    protected $VlrMovimento;

    /**
     * Descrição do Movimento de caixa 
     * @var string
     */
    protected $DscComplemento;

    /**
     * Código do tipo de movimento de conta corrente 
     * @var string
     */
    protected $CodIntegracaoTipoMovtoCc;

    /**
     * Código do movimento de conta corrente 
     * @var string
     */
    protected $CodIntegracaoMovtoCc;

    /**
     * Código da Filial 
     * @var string
     */
    protected $CodIntegracaoFilial;

    /**
     * Método responsável por preencher os dados para o funcionamento da entidade Movimento em Conta Corrente
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->CodEmpresa = $data->codEmpresa;
        $this->CodIntegracaoContaCorrente = $data->codIntegracaoContaCorrente;
        $this->CodTipoMovto = $data->codTipoMovto;
        $this->DatMovimento = $data->datMovimento;
        $this->VlrMovimento = $data->vlrMovimento;
        $this->DscComplemento = $data->dscComplemento;
        $this->CodIntegracaoTipoMovtoCc = $data->codIntegracaoTipoMovtoCc;
        $this->CodIntegracaoMovtoCc = $data->codIntegracaoMovtoCc;
        $this->CodIntegracaoFilial = $data->codIntegracaoFilial;
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
    public function getCodIntegracaoContaCorrente(): string
    {
        return $this->CodIntegracaoContaCorrente;
    }

    /**
     * @return string
     */
    public function getCodTipoMovto(): string
    {
        return $this->CodTipoMovto;
    }

    /**
     * @return string
     */
    public function getDatMovimento(): string
    {
        return $this->DatMovimento;
    }

    /**
     * @return float
     */
    public function getVlrMovimento(): float
    {
        return $this->VlrMovimento;
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
    public function getCodIntegracaoTipoMovtoCc(): string
    {
        return $this->CodIntegracaoTipoMovtoCc;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoMovtoCc(): string
    {
        return $this->CodIntegracaoMovtoCc;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoFilial(): string
    {
        return $this->CodIntegracaoFilial;
    }

}