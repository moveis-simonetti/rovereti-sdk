<?php

namespace Simonetti\Rovereti;

class DisponibilidadeFinanceira implements ToArrayInterface
{
    use ObjectDataUtil;

    private $AnoMes;
    private $VlrTotalContas;
    private $VlrTotalComprasEmAberto;
    private $VlrTotalContasCentroCusto;
    private $VlrTotalCotnasCentroCustoEmAberto;

    /**
     * @return mixed
     */
    public function getAnoMes()
    {
        return $this->AnoMes;
    }

    /**
     * @param mixed $AnoMes
     */
    public function setAnoMes($AnoMes)
    {
        $this->AnoMes = $AnoMes;
    }

    /**
     * @return mixed
     */
    public function getVlrTotalContas()
    {
        return $this->VlrTotalContas;
    }

    /**
     * @param mixed $VlrTotalContas
     */
    public function setVlrTotalContas($VlrTotalContas)
    {
        $this->VlrTotalContas = $VlrTotalContas;
    }

    /**
     * @return mixed
     */
    public function getVlrTotalComprasEmAberto()
    {
        return $this->VlrTotalComprasEmAberto;
    }

    /**
     * @param mixed $VlrTotalComprasEmAberto
     */
    public function setVlrTotalComprasEmAberto($VlrTotalComprasEmAberto)
    {
        $this->VlrTotalComprasEmAberto = $VlrTotalComprasEmAberto;
    }

    /**
     * @return mixed
     */
    public function getVlrTotalContasCentroCusto()
    {
        return $this->VlrTotalContasCentroCusto;
    }

    /**
     * @param mixed $VlrTotalContasCentroCusto
     */
    public function setVlrTotalContasCentroCusto($VlrTotalContasCentroCusto)
    {
        $this->VlrTotalContasCentroCusto = $VlrTotalContasCentroCusto;
    }

    /**
     * @return mixed
     */
    public function getVlrTotalCotnasCentroCustoEmAberto()
    {
        return $this->VlrTotalCotnasCentroCustoEmAberto;
    }

    /**
     * @param mixed $VlrTotalCotnasCentroCustoEmAberto
     */
    public function setVlrTotalCotnasCentroCustoEmAberto($VlrTotalCotnasCentroCustoEmAberto)
    {
        $this->VlrTotalCotnasCentroCustoEmAberto = $VlrTotalCotnasCentroCustoEmAberto;
    }
}