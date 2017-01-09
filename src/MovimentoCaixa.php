<?php

namespace Simonetti\Rovereti;

class MovimentoCaixa
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
    protected $codTipoMovto;

    /**
     * @var \DateTime
     */
    protected $datMovimento;

    /**
     * @var float
     */
    protected $vlrMovimento;

    /**
     * @var string
     */
    protected $dscComplemento;

    /**
     * @var string
     */
    protected $codIntegracaoTipoMovtoCx;

    /**
     * @var string
     */
    protected $codIntegracaoMovtoCx;


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
     * @return \DateTime
     */
    public function getDatMovimento(): \DateTime
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