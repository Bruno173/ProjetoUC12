<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro filme</title>
</head>
<div class=container>
    <form class="row g-3" action="../controler/inserirfilme.php" method="Post" enctype="multipart/form-data">
        <div class="col-md-5">
            <label for="inputnome" class="form-label">Nome do filme</label>
            <input type="text" name="nomefilme" class="form-control" id="inputnome" required>
        </div>

        <div class="col-md-3">
            <label for="inputZip" class="form-label">Gênero do filme</label required>
            <select id=generofilme name="generofilme" class="form-select">
                <option selected>escolha...</option>
                <option value="Acao">Ação</option>
                <option value="Terror">Comédia</option>
                <option value="Esporte">Desenho</option>
                <option value="RPG">Terror</option>
            </select>
        </div>


        <div class="col-md-3">
            <label for="inputduracao" class="form-label">Duração</label>
            <input type="time" class="form-control" name="duracao" id="inputduracao">
        </div>

        <div class="col-5">
            <label for="inputsinopse" class="form-label">Sinopse</label>
            <textarea type="text" name="sinopse" class="form-control" id="inputsinopse" required>
  </textarea>
        </div>


        <div class="col-md-3">
            <label for="inputdatalancamento" class="form-label">Data de Lançamento</label>
            <input type="date" name="datalancamento" class="form-control" id="inputdatalancamento" placeholder="00/00/0000" required>
        </div>
        <div class="col-md-3">
            <label for="inputstudio" class="form-label">Studio filme</label>
            <input type="text" name="studiofilme" class="form-control" id="inputstudio" required>
        </div>

        <div class="col-md-3">
            <label for="inputimagem" class="form-label">Inserir imagem filme</label>
            <input type="file" name="imgfilme" class="form-control" id="inputimagem" required>
        </div>

        <div class="col-md-3">
            <label for="inputlinkfilme" class="form-label">Link filme</label>
            <input type="text" name="linkfilme" class="form-control" id="inputlinkfilme" required>
        </div>


        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                <label class="form-check-label" for="gridCheck">
                    Aceito os termos do streaming do filme
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">SUBIR</button>
        </div>
</div>
</form>

<?php
include_once("footer.php");
?>