<?php
namespace Simonetti\Rovereti;

/**
 * Class MovimentoCaixa
 * @package Simonetti\Rovereti
 */
class MovimentoCaixa implements ToArrayInterface
{
    use ObjectToArray;

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
     * Código do tipo de movimento de caixa 
     * @var string
     */
    protected $CodIntegracaoTipoMovtoCx;

    /**
     * Código do movimento de caixa 
     * @var string
     */
    protected $CodIntegracaoMovtoCx;

    /**
     * Método responsável por preencher os dados para o funcionamento da entidade de Movimento Caixa
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->CodEmpresa = $data->codEmpresa;
        $this->CodIntegracaoFilial = $data->codIntegracaoFilial;
        $this->CodTipoMovto = $data->codTipoMovto;
        $this->DatMovimento = $data->datMovimento;
        $this->VlrMovimento = $data->vlrMovimento;
        $this->DscComplemento = $data->dscComplemento;
        $this->CodIntegracaoTipoMovtoCx = $data->codIntegracaoTipoMovtoCx;
        $this->CodIntegracaoMovtoCx = $data->codIntegracaoMovtoCx;
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
    public function getCodIntegracaoTipoMovtoCx(): string
    {
        return $this->CodIntegracaoTipoMovtoCx;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoMovtoCx(): string
    {
        return $this->CodIntegracaoMovtoCx;
    }
}