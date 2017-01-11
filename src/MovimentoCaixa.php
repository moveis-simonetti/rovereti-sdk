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
    protected $codEmpresa;

    /**
     * Código da Filial na Simonetti
     * @var string
     */
    protected $codIntegracaoFilial;

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
     * Descrição do Movimento de caixa na Simonetti
     * @var string
     */
    protected $dscComplemento;

    /**
     * Código do tipo de movimento de caixa na Simonetti
     * @var string
     */
    protected $codIntegracaoTipoMovtoCx;

    /**
     * Código do movimento de caixa na Simonetti
     * @var string
     */
    protected $codIntegracaoMovtoCx;

    /**
     * Método responsável por preencher os dados para o funcionamento da entidade de Movimento Caixa
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->codEmpresa = $data->codEmpresa;
        $this->codIntegracaoFilial = $data->codIntegracaoFilial;
        $this->codTipoMovto = $data->codTipoMovto;
        $this->datMovimento = $data->datMovimento;
        $this->vlrMovimento = $data->vlrMovimento;
        $this->dscComplemento = $data->dscComplemento;
        $this->codIntegracaoTipoMovtoCx = $data->codIntegracaoTipoMovtoCx;
        $this->codIntegracaoMovtoCx = $data->codIntegracaoMovtoCx;
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
    public function getCodIntegracaoTipoMovtoCx(): string
    {
        return $this->codIntegracaoTipoMovtoCx;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoMovtoCx(): string
    {
        return $this->codIntegracaoMovtoCx;
    }
}