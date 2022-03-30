<?php
include_once("../view/header.php");
include_once("../model/filmemodel.php");
include_once("../model/conexao.php");

?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>filme</title>
</head>
<?php

$generofilme = isset($_GET["generofilme"]) ? $_GET["generofilme"] : "";

if ($generofilme) {


  $generofilme = visufilmegenero($conn, $generofilme);

foreach($generofilme as $generofilmes):
?>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="<?= $generofilmes["imgfilme"] ?>" class="card" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $generofilmes["nomefilme"] ?></h5>
        <p class="card-text"><?= $generofilmes["sinopse"] ?></p>
      </div>
    </div>
  </div>
</div>




<?php
  endforeach;
  }
?>

<?php
include_once("footer.php");
?>