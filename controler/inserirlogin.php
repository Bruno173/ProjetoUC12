<?php
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");

$emailusu = $_POST["emailusu"];
$senhausu = $_POST["senhausu"];
$acesso = loginusuario($conn,$emailusu,$senhausu);

if($acesso === $emailusu){
    header("Location:../view/index.php");
}else{
    //header("Location:../view/login.php");
    var_dump ($acesso);
}

if($emailusu === 'administrador@gmail.com'){
    header("Location:../view/cadastrofilme.php");
}else{
    //header("Location:../view/login.php");
    var_dump ($acesso);
}


?>

