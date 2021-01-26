<?php
session_start();

require 'service/CalcService.php';

$comissao = new CalcService();

$preço = $_POST['preço'];

$_SESSION['preço'] = $preço;
$_SESSION['erro'] = $comissao->validar($preço);

$porcentegem = $comissao->calcular($preço);
$lucro = $preço - ( $preço / 100 * $porcentegem);

$_SESSION['resultado'] = $porcentegem;
$_SESSION['lucro'] = number_format($lucro, 2);


header('Location: index.php');