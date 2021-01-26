<?php
    session_start();
    if(isset($_SESSION['erro'])){
        $erro = $_SESSION['erro'];
    }else{
        $erro = false; 
    }
    if(isset($_SESSION['preço'])){
        $preço = $_SESSION['preço'];
    }else{
        $preço = '';
    }
    if(isset($_SESSION['resultado'])){
        $porcentagem = $_SESSION['resultado'] . '%';
    }else{
        $porcentagem = '';
    }
    if(isset($_SESSION['lucro'])){
        $lucro = $_SESSION['lucro'];
    }else{
        $lucro = '';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Comissões</title>
</head>
<body>
    <div class="container is-fluid is-centered">
        <form action="Calcular.php" method="post">
            <span>Preço de Venda</span>
            <br>
            <input class="input is-primary" name="preço" pattern="\d*">
            <button type="submit" class="button is-info is-light">Calcular <br>
                                                Comissão</button>
        </form>
        <div class="result">
            <?php 
                if($erro){
                    echo "<div class='notification is-danger' style='width:230px;margin-top:50px;'>
                    <button class='delete'></button>" .
                    $erro . "
                  </div>";
                }
                else{
                    echo "<div class='card' style='width:200px;margin-top:50px;>
                            <header class='card-header>
                                <p class='card-header-title'>
                                    Board
                                </p>
                            </header>
                            <div class='card-content'>
                                <div class='content'>
                                <u>Preço de Venda:</u>
                                    <u>Custo:</u> ". $preço ."
                                    <br>
                                    <u>Margem líquida:</u> " . $lucro . "
                                    <br>
                                    <u>Comissão:</u> " . $porcentagem ."
                                </div>
                            </div>
                            
                        </div>";
                    }
                ?>
        </div>
    </div>
    
</body>
<script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
</html>