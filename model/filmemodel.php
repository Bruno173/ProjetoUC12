<?php

function inserirfilme($conn,$nomefilme,$generofilme,$duracao,$datalancamento,$studiofilme,$sinopse,$imgfilme,$linkfilme){
$query= "INSERT INTO `tbfilme` (`nomefilme`, `generofilme`, `duracao`, `datalancamento`, `studiofilme`, `sinopse`,`imgfilme`,`linkfilme`) VALUES ('{$nomefilme}', '{$generofilme}', '{$duracao}', '{$datalancamento}','{$studiofilme}', '{$sinopse}', '{$imgfilme}', '{$linkfilme}')";
$dados = mysqli_query ($conn,$query);
return $dados;
}

function visufilmenome($conn, $nomefilme)
{
    $query = "select * from tbusuario where nomeusu like '%{$nomefilme}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
};

function visufilmegenero($conn, $generofilme)
{
    $query = "select * from tbusuario where nomeusu like '%{$generofilme}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
};

?>