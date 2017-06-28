<?php
/**
 * Created by PhpStorm.
 * User: carlosrodrigues
 * Date: 28/06/17
 * Time: 10:06
 */

namespace Simonetti\Rovereti;

class CreditoFornecedor
{
    use ObjectDataUtil;

    /**
     * @var int
     */
    private $CodEmpresa;

    /**
     * @var string
     */
    private $NumCpfCnpjFornecedor;

    /**
     * @var string
     */
    private $NomFornecedor;

    /**
     * @var string
     */
    private $DatCredito;

    /**
     * @var string
     */
    private $VlrCredito;

    /**
     * @var string
     */
    private $CodTipoMovtoCredito;

    /**
     * @var string
     */
    private $CodIntegracaoCreditoFornecedor;

    /**
     * @var string
     */
    private $DscObservacao;

    /**
     * @return int
     */
    public function getCodEmpresa(): int
    {
        return $this->CodEmpresa;
    }

    /**
     * @param int $CodEmpresa
     */
    public function setCodEmpresa(int $CodEmpresa)
    {
        $this->CodEmpresa = $CodEmpresa;
    }

    /**
     * @return string
     */
    public function getNumCpfCnpjFornecedor(): string
    {
        return $this->NumCpfCnpjFornecedor;
    }

    /**
     * @param string $NumCpfCnpjFornecedor
     */
    public function setNumCpfCnpjFornecedor(string $NumCpfCnpjFornecedor)
    {
        $this->NumCpfCnpjFornecedor = $NumCpfCnpjFornecedor;
    }

    /**
     * @return string
     */
    public function getNomFornecedor(): string
    {
        return $this->NomFornecedor;
    }

    /**
     * @param string $NomFornecedor
     */
    public function setNomFornecedor(string $NomFornecedor)
    {
        $this->NomFornecedor = $NomFornecedor;
    }

    /**
     * @return string
     */
    public function getDatCredito(): string
    {
        return $this->DatCredito;
    }

    /**
     * @param string $DatCredito
     */
    public function setDatCredito(string $DatCredito)
    {
        $this->DatCredito = $DatCredito;
    }

    /**
     * @return string
     */
    public function getVlrCredito(): string
    {
        return $this->VlrCredito;
    }

    /**
     * @param string $VlrCredito
     */
    public function setVlrCredito(string $VlrCredito)
    {
        $this->VlrCredito = $VlrCredito;
    }

    /**
     * @return string
     */
    public function getCodTipoMovtoCredito(): string
    {
        return $this->CodTipoMovtoCredito;
    }

    /**
     * @param string $CodTipoMovtoCredito
     */
    public function setCodTipoMovtoCredito(string $CodTipoMovtoCredito)
    {
        $this->CodTipoMovtoCredito = $CodTipoMovtoCredito;
    }

    /**
     * @return string
     */
    public function getCodIntegracaoCreditoFornecedor(): string
    {
        return $this->CodIntegracaoCreditoFornecedor;
    }

    /**
     * @param string $CodIntegracaoCreditoFornecedor
     */
    public function setCodIntegracaoCreditoFornecedor(string $CodIntegracaoCreditoFornecedor)
    {
        $this->CodIntegracaoCreditoFornecedor = $CodIntegracaoCreditoFornecedor;
    }

    /**
     * @return string
     */
    public function getDscObservacao(): string
    {
        return $this->DscObservacao;
    }

    /**
     * @param string $DscObservacao
     */
    public function setDscObservacao(string $DscObservacao)
    {
        $this->DscObservacao = $DscObservacao;
    }
}