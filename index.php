<?php
session_start();

if($_COOKIE['usuario']){
  $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
  header('Location: login.php');
}
?>

<!doctype html>
<html lang="pt-br">

<head>
  <title>Curso PHP</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- google fonte Oswald -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- CSS próprio -->
  <link rel="stylesheet" href="assets/css/estilos.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Indídice de Exercícios</h2>
  </header>

  <nav class="navegacao">
    <span class="usuario">Usuário: <?= $_SESSION['usuario']?></span>
    <a href="logout.php" class="vermelho">Sair</a>
  </nav>
  
  <main class="principal">
    <div class="conteudo">
      <?php require_once('menu.php')?>
    </div>
  </main>

  <footer class="rodape">
    COD3R & ALUNOS &copy <?= date('Y'); ?> - Ismael Machado
  </footer>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

