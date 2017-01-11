<?php

namespace Simonetti\Rovereti;

class MovimentoContaCorrente implements ToArrayInterface
{
    use ObjectToArray;

    /**
     * Código da empresa no Rovereti ERP
     * @var int
     */
    protected $codEmpresa;

    /**
     * Código da conta corrente 
     * @var string
     */
    protected $codIntegracaoContaCorrente;

    /**
     * Tipo de movimento (D/C)
     * @var string
     */
    protected $codTipoMovto;

    /**
     * Data do movimento
     * @var string
     */
    protected $datMovimento;

    /**
     * Valor do movimento
     * @var float
     */
    protected $vlrMovimento;

    /**
     * Descrição do Movimento de caixa 
     * @var string
     */
    protected $dscComplemento;

    /**
     * Código do tipo de movimento de conta corrente 
     * @var string
     */
    protected $codIntegracaoTipoMovtoCc;

    /**
     * Código do movimento de conta corrente 
     * @var string
     */
    protected $codIntegracaoMovtoCc;

    /**
     * Código da Filial 
     * @var string
     */
    protected $codIntegracaoFilial;

    /**
     * Método responsável por preencher os dados para o funcionamento da entidade Movimento em Conta Corrente
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->codEmpresa = $data->codEmpresa;
        $this->codIntegracaoContaCorrente = $data->codIntegracaoContaCorrente;
        $this->codTipoMovto = $data->codTipoMovto;
        $this->datMovimento = $data->datMovimento;
        $this->vlrMovimento = $data->vlrMovimento;
        $this->dscComplemento = $data->dscComplemento;
        $this->codIntegracaoTipoMovtoCc = $data->codIntegracaoTipoMovtoCc;
        $this->codIntegracaoMovtoCc = $data->codIntegracaoMovtoCc;
        $this->codIntegracaoFilial = $data->codIntegracaoFilial;
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
    public function getCodIntegracaoContaCorrente(): string
    {
        return $this->codIntegracaoContaCorrente;
    }

    /**
     * @return string
     */
    public function getCodTipoMovto(): string
    {
        return $this->codTipoMovto;
    }

    /**
     * @return string
     */
    public function getDatMovimento(): string
    {
        return $this->datMovimento;
    }

    /**
     * @return float
     */
    public function getVlrMovimento(): float
    {
        return $this->vlrMovimento;
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
    public function getCodIntegracaoTipoMovtoCc(): string
    {
        return $this->codIntegracaoTipoMovtoCc;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoMovtoCc(): string
    {
        return $this->codIntegracaoMovtoCc;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoFilial(): string
    {
        return $this->codIntegracaoFilial;
    }

}