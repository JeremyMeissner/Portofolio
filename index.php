<?php
require_once "./model/crud.php";
$dbPosts = SelectAllPosts();
$posts = "";
$post = "";
foreach ($dbPosts as $key => $value) {
  $images = "";
  foreach ($value["media"] as $mediaKey => $mediaValue) {
    $images .= '<img src="./assets/img/upload/' . $mediaValue["nomMedia"] . '" class="card-img-top" alt="' . $mediaValue["nomMedia"] . '">';
  }
  $post = '
  <figure class="figure jumbotron col-12">
  ' . $images . '
    <figcaption class="figure-caption"> Date de création: ' . $value["creationDate"] . ',  Date de modification: ' . $value["modificationDate"] . '</figcaption>
    <figcaption class="figure-caption">' . $value["commentaire"] . '</figcaption>
</figure>';
  $posts .= $post;
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark align-items-center" style="background-color: #3B5999;">
    <a class="navbar-brand py-0" href="./index.php" >
      <img src="./assets/img/brand/brand-logo-light.png" width="38" height="38" alt="bootstrapLogo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse align-items-center mt-4 mt-lg-0" id="navbarToggler">
      <form class="form-inline mr-4">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-append">
            <button class="btn btn-outline-light my-sm-0" type="submit"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item mr-2">
          <a class="nav-link text-light" href="./index.php"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./post.php"><i class="fas fa-plus"></i> Post</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a class="nav-link" href="#">
          <img src="https://www.gravatar.com/avatar/d5ea97b8075f83556bf48a205e6836a1" class="rounded-circle bg-light" width="32" height="32" alt="user logo">
        </a>
      </span>
    </div>
  </nav>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Welcome</h1>
    </div>
    <br><br>
    <div class="container">
      <?=$posts?>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
