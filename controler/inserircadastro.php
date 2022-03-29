<?php
include_once ( "../view/header.php" );
include_once ( "../model/conexao.php" );
include_once ( "../model/usuariomodel.php" );

extract( $_REQUEST,EXTR_OVERWRITE );
 if (inserirUsuario($conn,$nomeusu,$cpfusu,$tipousu,$emailusu,$senhausu,$pinusu)){
    header("Location:../view/cadastrocartao.php");
}else{
 echo ( "Não foi possível cadastrar seus dados !!!" );
}

include_once ( "../view/footer.php" )
?>