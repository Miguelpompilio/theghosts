<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Jersey+15&display=swap"
    rel="stylesheet">
  <title>The Ghosts</title>

  <base href="http://localhost/pirate/">

  <meta name="description" content="Nos acompanhe nessa aventura de novos jogos tenebrosos.">

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/icon.ico">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="img/logo.png" alt="The Ghosts">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jogos">jogos</a>
            </li>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
          </ul>
          <div class="d-flex">
            <a href="https://www.instagram.com/miguel_pompilio/" title="Contato" class="btn btn-info">
              <i class="fas fa-envelope"></i>
              Entre em Contato
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <?php

    if (isset($_GET["param"])) {
      $param = $_GET["param"];
      // serapar o parametro por /
      $p = explode("/", $param);
      //print_r($p);
    }

    $page = $p[0] ?? "home";
    $jogo = $p[1] ?? NULL;

    if ($page == "jogo") {
      $pagina = "jogo/{$jogo}.php";

    } else {
      $pagina = "paginas/{$page}.php";
    }

    if (file_exists($pagina)) {
      include $pagina;
    } else {
      include "paginas/erro.php";
    }
    ?>
  </main>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/fslightbox.js"></script>


</body>

</html>