<?php

namespace Simonetti\Rovereti;

/**
 * Class PagamentoCaixa
 * @package Simonetti\Rovereti
 */
class PagamentoCaixa implements ToArrayInterface
{
    use ObjectDataUtil;

    /**
     * @var int
     */
    protected $NumMovto;

    /**
     * @var string
     */
    protected $DatMovto;

    /**
     * @var float
     */
    protected $VlrMovto;

    /**
     * @var string
     */
    protected $DscComplemento;

    /**
     * @var string
     */
    protected $DscTipoMovtoCaixa;

    /**
     * @var string
     */
    protected $CodFilialIntegracao;

    /**
     * @return int
     */
    public function getNumMovto(): int
    {
        return $this->NumMovto;
    }

    /**
     * @param int $NumMovto
     */
    public function setNumMovto(int $NumMovto)
    {
        $this->NumMovto = $NumMovto;
    }

    /**
     * @return string
     */
    public function getDatMovto(): string
    {
        return $this->DatMovto;
    }

    /**
     * @param string $DatMovto
     */
    public function setDatMovto(string $DatMovto)
    {
        $this->DatMovto = $DatMovto;
    }

    /**
     * @return float
     */
    public function getVlrMovto(): float
    {
        return $this->VlrMovto;
    }

    /**
     * @param float $VlrMovto
     */
    public function setVlrMovto(float $VlrMovto)
    {
        $this->VlrMovto = $VlrMovto;
    }

    /**
     * @return string
     */
    public function getDscComplemento(): string
    {
        return $this->DscComplemento;
    }

    /**
     * @param string $DscComplemento
     */
    public function setDscComplemento(string $DscComplemento)
    {
        $this->DscComplemento = $DscComplemento;
    }

    /**
     * @return string
     */
    public function getDscTipoMovtoCaixa(): string
    {
        return $this->DscTipoMovtoCaixa;
    }

    /**
     * @param string $DscTipoMovtoCaixa
     */
    public function setDscTipoMovtoCaixa(string $DscTipoMovtoCaixa)
    {
        $this->DscTipoMovtoCaixa = $DscTipoMovtoCaixa;
    }

    /**
     * @return string
     */
    public function getCodFilialIntegracao(): string
    {
        return $this->CodFilialIntegracao;
    }

    /**
     * @param string $CodFilialIntegracao
     */
    public function setCodFilialIntegracao(string $CodFilialIntegracao)
    {
        $this->CodFilialIntegracao = $CodFilialIntegracao;
    }
}