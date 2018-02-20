<?php

namespace Simonetti\Rovereti;

/**
 * Class Parcelas
 * @package Simonetti\Rovereti
 */
class Parcela implements ToArrayInterface
{
    use ObjectDataUtil;

    /**
     * Número da Parcela
     * @var int
     */
    protected $NumParcela;

    /**
     * Data de Venciamento da Parcela
     * @var string
     */
    protected $DatVencimento;

    /**
     * Valor da Parcela
     * @var float
     */
    protected $VlrParcela;

    /**
     * Parcelas constructor.
     * @param int $NumParcela
     * @param string $DatVenciemnto
     * @param float $VlrParcela
     */
    public function __construct(int $numParcela, string $datVenciemnto, float $vlrParcela)
    {
        $this->NumParcela = $numParcela;
        $this->DatVencimento = $datVenciemnto;
        $this->VlrParcela = $vlrParcela;
    }

    /**
     * @return int
     */
    public function getNumParcela() : int
    {
        return $this->NumParcela;
    }

    /**
     * @return string
     */
    public function getDatVencimento() : string
    {
        return $this->DatVencimento;
    }

    /**
     * @return float
     */
    public function getVlrParcela() : float
    {
        return $this->VlrParcela;
    }
}