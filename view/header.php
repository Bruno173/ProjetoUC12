<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">      
    <link rel="stylesheet" href="../view/css/style.css">
    <title>XUXADAFLIX</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../view/index.php">XUXADAFLIX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   
                    <li class="nav-item dropdown">
                        </a>
                            <li><a class="dropdown-item" href="../view/visuacao.php">Ação</a></li>
                            <li><a class="dropdown-item" href="../view/visucomedia.php">Comédia</a></li>
                            <li><a class="dropdown-item" href="../view/visudesenho.php">Desenho</a></li>
                            <li><a class="dropdown-item" href="../view/visuterror.php">Terror</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Digite aqui!" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>

    <?php
include_once("footer.php");
?>