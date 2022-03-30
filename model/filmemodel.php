<?php

function inserirfilme($conn,$nomefilme,$generofilme,$duracao,$datalancamento,$studiofilme,$sinopse,$imgfilme,$linkfilme){
$query= "INSERT INTO `tbfilme` (`nomefilme`, `generofilme`, `duracao`, `datalancamento`, `studiofilme`, `sinopse`,`imgfilme`,`linkfilme`) VALUES ('{$nomefilme}', '{$generofilme}', '{$duracao}', '{$datalancamento}','{$studiofilme}', '{$sinopse}', '{$imgfilme}', '{$linkfilme}')";
$dados = mysqli_query ($conn,$query);
return $dados;
}

function visufilmenome($conn, $nomefilme)
{
    $query = "select * from tbfilme where nomefilme like '%{$nomefilme}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
};

function visufilmegenero($conn, $generofilme)
{
    $query = "select * from tbfilme where generofilme = '{$generofilme}'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
};

function visuimgfilme($conn,$imgfilme)
{
    $query = "select * from tbfilme where imgfilme like '%{$imgfilme}%'";
    $resultado = mysqli_query($conn, $query);

    return $resultado;
};

?>