<?php
session_start();
require_once "funcoesCalculo.php";

if(!empty($_POST['inputNum1']) && !empty($_POST['inputNum2'])){
    
    $numeros1 = $_POST['inputNum1'];
    $numeros2 = $_POST['inputNum2'];
    
    if($_POST['selectOperacoes'] == "adicao"){
        $resultado = $numeros1 . " + " . $numeros2 . " = " . adicao($numeros1,$numeros2);
    }
    else if($_POST['selectOperacoes'] == "subtracao"){
        $resultado = $numeros1 . " - " . $numeros2 . " = " . subtracao($numeros1,$numeros2);
    }
    else if($_POST['selectOperacoes'] == "multiplicacao"){
        $resultado = $numeros1 . " * " . $numeros2 . " = " . multiplicacao($numeros1,$numeros2);
    }
    else if($_POST['selectOperacoes'] == "divisao"){
        $resultado = $numeros1 . " / " . $numeros2 . " = " . divisao($numeros1,$numeros2);
    }
    
    echo $resultado;
}

$_SESSION['resultado'] = $resultado;
header('location:../index.php');
die();

?>