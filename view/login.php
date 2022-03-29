<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de Games</title>
</head>

<body class="fundo">



    <div>
        <div class="login">
            <div id="caixalogin">
                <form action="../controler/inserirLogin.php" method="post">
                    <div class="mb-3">
                        <label class="msglogin" for="exampleInputEmail1" class="form-label">Email</label>
                        <input class="cx" type="email" name="emailusu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div class="txtaviso" class="msglogin" id="emailHelp" class="form-text">Não compartilhamos seu e-mail com ninguém.</div>
                    </div>
                    <div class="mb-3">
                        <label class="msglogin" for="exampleInputPassword1" class="form-label">Senha</label>
                        <input class="cx" type="password" name="senhausu" class="form-control" id="exampleInputPassword1">
                    </div>

                    <a href="../view/index.php"> <button type="submit" class="btn btn-danger">Logar</button></a>

                    <a href="../view/cadastrousu.php"><button type="button" class="btn btn-danger">Cadastrar</button></a>

                </form>

            </div>
        </div>
    </div>
</body>

</html>