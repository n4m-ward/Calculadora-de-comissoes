<?php

class CalcService{
    public function validar($preço){
        if(!is_numeric($preço)){
            $_SESSION['erro'] = 'por favor insira um numero valido';
            header('Location: ../index.php');
        }
        else if($preço == '' || $preço == null || $preço <= 0){
            $_SESSION['erro'] = 'por favor insira um numero valido';
            header('Location: ../index.php');
        }else if($preço < 10){
            $_SESSION['erro'] = 'Não é permitido um valor menor que 10 reais';
            header('Location: ../index.php');
        }else if($preço > 30){
            $_SESSION['erro'] = 'Não é permitido um valor maior que 30 reais';
            header('Location: ../index.php');
        }else{
            $_SESSION['erro'] = false;
        }
        return $_SESSION['erro'];
    }

    public function calcular($preço){
        if($preço == 10){
            $porcentagem = 1;
        } else if($preço > 10){
            $porcentagem = 1 + (0.45 * ($preço - 10));
        }
        return $porcentagem;
    }
}