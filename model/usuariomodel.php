<?php
function inserirUsuario($conn,$nomeusu,$cpfusu,$emailusu,$senhausu, ){
  
    $salto = ['cost' => 8];
       
    $senhacrip = password_hash($senhausu,PASSWORD_BCRYPT,$salto);
       
    $query= "INSERT INTO `tbusuario` (`idusu`, `nomeusu`, `emailusu`, `senhausu`, `cpfusu`) VALUES (NULL, '{$nomeusu}', '{$emailusu}', '{$senhacrip}', '{$cpfusu}', '{}')";
       
    $dados = mysqli_query ($conn,$query);
        
     return $dados;
};

function loginusuario($conn,$emailusu,$senhausu){
    $query = "Select * from tbusuario where emailusu='{$emailusu}'";
    $resultado = mysqli_query($conn,$query);
    if(mysqli_num_rows($resultado) > 0){
        $row = mysqli_fetch_assoc($resultado);
        if(password_verify($senhausu,$row["senhausu"])){
            $_SESSION["emailusu"] = $row["emailusu"];
            return $row["emailusu"];
        }else{
            return "Acesso negado1";
        }
    }else{
        return "Acesso negado2";
    }
    return "Acesso negado3";
};
