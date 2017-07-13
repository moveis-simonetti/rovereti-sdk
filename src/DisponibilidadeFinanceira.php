<?php

namespace Simonetti\Rovereti;

class DisponibilidadeFinanceira implements ToArrayInterface
{
    use ObjectDataUtil;

    /**
     * @var string
     */
    private $AnoMes;

    /**
     * @var float
     */
    private $VlrTotalContas;

    /**
     * @var float
     */
    private $VlrTotalComprasEmAberto;

    /**
     * @var float
     */
    private $VlrTotalContasCentroCusto;

    /**
     * @var float
     */
    private $VlrTotalContasCentroCustoEmAberto;

    /**
     * @return string
     */
    public function getAnoMes(): string
    {
        return $this->AnoMes;
    }

    /**
     * @param string $AnoMes
     */
    public function setAnoMes(string $AnoMes)
    {
        $this->AnoMes = $AnoMes;
    }

    /**
     * @return float
     */
    public function getVlrTotalContas(): float
    {
        return $this->VlrTotalContas;
    }

    /**
     * @param float $VlrTotalContas
     */
    public function setVlrTotalContas(float $VlrTotalContas)
    {
        $this->VlrTotalContas = $VlrTotalContas;
    }

    /**
     * @return float
     */
    public function getVlrTotalComprasEmAberto(): float
    {
        return $this->VlrTotalComprasEmAberto;
    }

    /**
     * @param float $VlrTotalComprasEmAberto
     */
    public function setVlrTotalComprasEmAberto(float $VlrTotalComprasEmAberto)
    {
        $this->VlrTotalComprasEmAberto = $VlrTotalComprasEmAberto;
    }

    /**
     * @return float
     */
    public function getVlrTotalContasCentroCusto(): float
    {
        return $this->VlrTotalContasCentroCusto;
    }

    /**
     * @param float $VlrTotalContasCentroCusto
     */
    public function setVlrTotalContasCentroCusto(float $VlrTotalContasCentroCusto)
    {
        $this->VlrTotalContasCentroCusto = $VlrTotalContasCentroCusto;
    }

    /**
     * @return float
     */
    public function getVlrTotalContasCentroCustoEmAberto(): float
    {
        return $this->VlrTotalContasCentroCustoEmAberto;
    }

    /**
     * @param float $VlrTotalContasCentroCustoEmAberto
     */
    public function setVlrTotalContasCentroCustoEmAberto(float $VlrTotalContasCentroCustoEmAberto)
    {
        $this->VlrTotalContasCentroCustoEmAberto = $VlrTotalContasCentroCustoEmAberto;
    }

    /**
     * @param string $key
     * @param $value
     * @return float|mixed
     */
    protected function populateMap(string $key, $value)
    {
        if ("AnoMes" == $key) {
            return $value;
        }

        return floatval($value);
    }
}