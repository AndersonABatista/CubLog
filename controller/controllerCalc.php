<?php 
session_start();
// 
if (isset($_POST['env'])) 
{
    require_once "../class/calc.php";

    $calc = new calc;
    $calc->setQuantidade($_POST['quantidade']);
    $calc->setAltura($_POST['alturaa']);
    $calc->setLargura($_POST['largura']);
    $calc->setProfundidade($_POST['profunfidadee']);
    $calc->setFatorCubagem($_POST['fatorCub']);

    $calc->calcular();

    $number = $calc->getResultado();

    $numero = number_format($number, 2, ',','.');

    echo $numero;
  
    $_SESSION['resultado'] = $numero;
    
    header("location: ../home.php");
    
    
}


?>
