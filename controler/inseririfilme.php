<?php
include_once("../view/header.php");
include_once ("../model/conexao.php");
include_once ("../model/filmemodel.php");
extract($_REQUEST,EXTR_OVERWRITE);

if(inserirfilme($conn,$nomefilme,$generofilme,$duracao,$datalancamento,$studiofilme,$sinopse,$imgfilme,$linkfilme)){
echo("Filme foi cadastrado com Sucesso !!!");
}else{
echo("Não foi possível cadastrar o filme !!!");
}

include_once("../view/footer.php")
?>