<?php

namespace Simonetti\Rovereti;

class MovimentoContaCorrente
{
    /**
     * @var int
     */
    protected $codEmpresa;

    /**
     * @var string
     */
    protected $codIntegracaoContaCorrente;

    /**
     * @var string
     */
    protected $codTipoMovto;

    /**
     * @var string
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
    protected $codIntegracaoTipoMovtoCc;

    /**
     * @var string
     */
    protected $codIntegracaoMovtoCc;

    /**
     * @var string
     */
    protected $codIntegracaoFilial;

    /**
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
     * @return \DateTime
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