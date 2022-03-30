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

<body class="body">
    <nav id="navbar" class="navbar-expand-lg">
        <div class="navbar">
            <a id="pg" class="navbar-brand" class="sla" href="../view/index.php">XUXADAFLIX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        </a>
                    <li><a id="acao" class="dropdown-item" class="sla" href="../view/visufilmegenero.php?generofilme=acao">Ação</a></li>
                    <li><a id="comedia" class="dropdown-item" class="sla" href="../view/visufilmegenero.php?generofilme=comedia">Comédia</a></li>
                    <li><a id="desenho" class="dropdown-item" class="sla" href="../view/visufilmegenero.php?generofilme=desenho">Desenho</a></li>
                    <li><a id="terror" class="dropdown-item" class="sla" href="../view/visufilmegenero.php?generofilme=terror">Terror</a></li>
                    <div id="sair">
                        <li><a class="dropdown-item" href="../view/login.php">sair</a></li>
                    </div>
                </ul>
                </li>
                </ul>

            </div>
        </div>
    </nav>

    <?php
    include_once("footer.php");
    ?>