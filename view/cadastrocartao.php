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
        <form class="row g-3" action="../controler/inserirCadastrocartao.php" method="Get">
            <div class="col-md-4">
                <label for="inputnome" class="form-label">Nome</label>
                <input type="text" name="nomecartao" class="form-control" id="inputnomecartao" placeholder="Nome no cartão" required>
            </div>

            <div class="col-md-2">
                <label for="inputcep" class="form-label">Numero do Cartão</label>
                <input type="text" name="numcartao" class="form-control" id="inputnumcartao" placeholder="0000.0000.0000" required>
            </div>

            <div class="col-md-2">
                <label for="inputcep" class="form-label">CVV</label>
                <input type="number" name="cvvcartao" class="form-control" id="inputcvvcartao" placeholder="123" required>
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" name="pagamento" type="checkbox" id="inputpagamento" required>
                    <label class="form-check-label" for="gridCheck">
                        Aceito os termos de contrato da XUXADAFLIX
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Assinar</button>
            </div>
        </form>

</body>

</html>

<?php
include_once("footer.php");
?>