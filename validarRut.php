<?php 

class ValidaelRut {
//echo 'Este programa comprueba si el rut ingresado es valido' . "</br></br>";
//echo 'Ingrese su rut con el dígito verificador (99999999X):' . "</br></br>";
//$trut = "152747942";
var $trut;
 
function __construct($trut){
    $this->trut=$trut;
}
function validadorRut($trut)
{
    $dvt = substr($trut, strlen($trut) - 1, strlen($trut));
    $rutt = substr($trut, 0, strlen($trut) - 1);
    $rut = (($rutt) + 0);
    $pa = $rut;
    $c = 2;
    $sum = 0;
    while ($rut > 0)
    {
        $a1 = $rut % 10;
        $rut = floor($rut / 10);
        $sum = $sum + ($a1 * $c);
        $c = $c + 1;
        if ($c == 8)
        {
            $c = 2;
        }
    }
    $di = $sum % 11;
    $digi = 11 - $di;
    $digi1 = ((string )($digi));
    if (($digi1 == '10'))
    {
        $digi1 = 'K';
    }
    if (($digi1 == '11'))
    {
        $digi1 = '0';
    }
    if (($dvt == $digi1))
    {
        echo 'El rut es valido: ', $pa, '-', $digi1;
    } else
    {
        echo 'El rut ingresado ', $pa, '-', $dvt, ' es invalido. Se esperaba: ', $pa,
            '-', $digi1;
    }
    }
}
 
$miRut = '193111424';
$elRut = new ValidaelRut($miRut);
$elRut->validadorRut($miRut);
?>