<?php
namespace Acastillo;

use PHPUnit\Runner\Exception;

class CalculadoraIsr
{
    public function getIva( $importe = null )
    {
        if( is_null( $importe ) )
            throw new Exception( 'parametro vacio' );

        if( is_array( $importe ) )
            $importe = array_sum( $importe );

        return $importe * 1.16;
    }
}