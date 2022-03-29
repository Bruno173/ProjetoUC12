<?php
include_once ( "../view/header.php" );
include_once ( "../model/conexao.php" );
include_once ( "../model/cartaomodel.php" );

extract( $_REQUEST,EXTR_OVERWRITE );
 if (inserircartao($conn,$nomecartao,$numcartao,$cvvcartao,$pagamento)){
 echo ( "O Perfil foi cadastrados com Sucesso !!!" );
}else{
 echo ( "Não foi possível cadastrar seus dados !!!" );
}

include_once ( "../view/footer.php" )
?>