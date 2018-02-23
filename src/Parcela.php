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
     * @var string
     */
    protected $VlrParcela;

    /**
     * Parcelas constructor.
     * @param int $numParcela
     * @param string $datVencimento
     * @param string $vlrParcela
     */
    public function __construct(int $numParcela, string $datVencimento, string $vlrParcela)
    {
        $this->NumParcela = $numParcela;
        $this->DatVencimento = $datVencimento;
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
     * @return string
     */
    public function getVlrParcela() : string
    {
        return $this->VlrParcela;
    }
}