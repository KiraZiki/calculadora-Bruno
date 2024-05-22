<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="../index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>
    
    <div class="div-conteudo">
        <form method="POST" action="../logica/processamento.php">
            <label>Digite uma temperatura:</label>
            <input type="text" name="temp" placeholder="Digite uma tempetatura">
            <select name="selectForma">
                <option value="CpF">Celsius para Fahrenheit</option>
                <option value="FpC">Fahrenheit para Celsius</option>
            </select>
            <label>Resultado: <?php
                if(isset($_SESSION['resultadot'])){
                    echo $_SESSION['resultadot'];
                }

            ?></label>
            <input id="botao" type="submit" value="Calcular">
        </form>
        <img src="../img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas - AMS</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>