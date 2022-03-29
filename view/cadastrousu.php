<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>cadastro</title>
</head>

<body id='container'>


    <div class=container>
        <form class="row g-3" action="../controler/inserirCadastro.php" method="Get">
            <div class="col-md-4">
                <label for="inputnome" class="form-label">Nome</label>
                <input type="text" name="nomeusu" class="form-control" id="inputnome" required>
            </div>

            <div class="col-4">
                <label for="inputcpf" class="form-label">CPF</label>
                <input type="text" name="cpfusu" class="form-control" id="inputcpf" placeholder="000.000.000-00" required>
            </div>

            <div class="col-md-4">
                <label for="inputemail" class="form-label">Email</label>
                <input type="email" name="emailusu" class="form-control" id="inputemail" required>
            </div>
            <div class="col-md-3">
                <label for="inputsenha" class="form-label">DIGITA A SENHA DE ACESSO </label>
                <input type="password" name="senhausu" class="form-control" id="inputsenha" placeholder="senha" required>
            </div>

            <div class="col-12">
                <button type="submit" href="../view/cadastrocartao.php"  class="btn btn-info">Next</button>
            </div>
    </div>
    </form>

</body>

</html>

<?php
include_once("footer.php");
?>