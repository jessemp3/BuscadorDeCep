<?php

use PHPUnit\Framework\TestCase;
use Wead\DigitalCep\Search;

class SearchTest extends TestCase
{
    public function testGetAddressFromZipcodeDefaultUsage(){
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipcode('3840824');

        $esperado = [
            "cep" => "38408-242",
            "logradouro" => "Rua Orozimbo Ribeiro",
            "complemento" => "",
            "unidade" => "",
            "bairro" => "Santa Mônica",
            "localidade" => "Uberlândia",
            "uf" => "MG",
            "estado" => "Minas Gerais",
            "regiao" => "Sudeste",
            "ibge" => "3170206",
            "gia" => "",
            "ddd" => "34",
            "siafi" => "5403"
        ];

        $this->assertEquals($esperado, $resultado);
    }
}
