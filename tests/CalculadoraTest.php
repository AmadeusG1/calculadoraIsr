<?php
/**
 * Created by PhpStorm.
 * User: acastillo
 * Date: 14/12/2017
 * Time: 07:51 AM
 */

use PHPUnit\Framework\TestCase;
use Acastillo\CalculadoraIsr;

class CalculadoraTest extends TestCase
{
    public function test_if_calculator_exist()
    {
        $calculadora = new CalculadoraIsr();
        $this->assertInstanceOf( Acastillo\CalculadoraIsr::class, $calculadora );
    }

    /**
     * @test
     */
    public function if_calculator_return_iva()
    {
        $calculator = new CalculadoraIsr();
        $totalIva = $calculator->getIva( 100 );
        $this->assertEquals( 116, $totalIva );
    }

    /**
     * @test
     */
    public function if_calculator_params_is_array()
    {
        $calculator = new CalculadoraIsr();
        $totalIva = $calculator->getIva( [100, 100] );
        $this->assertEquals( 232, $totalIva );
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage parametro vacio
     */
    public function test_if_parameter_is_required()
    {
        $calculator = new CalculadoraIsr();
        $totalIva = $calculator->getIva();
        $this->assertEquals( 232, $totalIva );
    }
}
