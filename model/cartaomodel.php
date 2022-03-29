<?php
function inserircartao($conn,$nomecartao,$numcartao,$cvvcartao,$pagamento){
      
    $query= "INSERT INTO `tbcartao` (`idcartao`,`nomecartao`, `numcartao`,`cvvcartao`, `pagamento`)VALUES (NULL, '{$nomecartao}', '{$numcartao}', '{$cvvcartao}', '{$pagamento}')";
       
    $dados = mysqli_query ($conn,$query);
        
     return $dados;
};