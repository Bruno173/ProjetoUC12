<?php
    include_once("../model/conexao.php");
    include_once("../model/filmemodel.php");
    
    
    $nome = $_POST["nomeUsu"];
    
    if(visufilmenome($conn, $filmenome)){
        header("Location:../view/visufilmenome.php");
    }else{
        header("Location:../view/visufilmenome.php");
    }

?>