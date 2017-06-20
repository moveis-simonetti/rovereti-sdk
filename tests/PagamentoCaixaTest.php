<?php

namespace Simonetti\Rovereti\Tests;

use Simonetti\Rovereti\PagamentoCaixa;

class PagamentoCaixaTest extends \PHPUnit_Framework_TestCase
{

    public function testPopulate()
    {
        $pagamentoCaixa = new PagamentoCaixa();

        $data = [
            "NumMovto" => 155708,
            "DatMovto" => "2016-01-26T00:00:00",
            "VlrMovto" => 150.0,
            "DscComplemento" => "ÁGUA 01/2012",
            "DscTipoMovtoCaixa" => "PAGAMENTO DE CONTA",
            "CodFilialIntegracao" => "9876554321"
        ];

        $pagamentoCaixa->populate($data);

        $this->assertEquals($data['NumMovto'], $pagamentoCaixa->getNumMovto());
        $this->assertEquals($data['DatMovto'], $pagamentoCaixa->getDatMovto());
        $this->assertEquals($data['VlrMovto'], $pagamentoCaixa->getVlrMovto());
        $this->assertEquals($data['DscComplemento'], $pagamentoCaixa->getDscComplemento());
        $this->assertEquals($data['DscTipoMovtoCaixa'], $pagamentoCaixa->getDscTipoMovtoCaixa());
        $this->assertEquals($data['CodFilialIntegracao'], $pagamentoCaixa->getCodFilialIntegracao());
    }
}