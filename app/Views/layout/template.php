<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Implementasi SQL</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Implementasi SQL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo route_to('/')?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Basic Query 1
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo route_to('where')?>">Where</a>
          <a class="dropdown-item" href="<?php echo route_to('distinct')?>">Distinct</a>
          <a class="dropdown-item" href="<?php echo route_to('operator-and')?>">Operator AND</a>
          <a class="dropdown-item" href="<?php echo route_to('operator-or')?>">Operator OR</a>
          <a class="dropdown-item" href="<?php echo route_to('operator-in')?>">Operator IN</a>
          <a class="dropdown-item" href="<?php echo route_to('between')?>">Between</a>
          <a class="dropdown-item" href="<?php echo route_to('like')?>">Like</a>
          <a class="dropdown-item" href="<?php echo route_to('is-null')?>">Is Null</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Basic Query 2
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo route_to('alias')?>">Alias</a>
          <a class="dropdown-item" href="<?php echo route_to('left-join')?>">Join (Left-Join)</a>
          <a class="dropdown-item" href="<?php echo route_to('inner-join')?>">Join (Inner-join)</a>
          <a class="dropdown-item" href="<?php echo route_to('group-by')?>">Group By</a>
          <a class="dropdown-item" href="<?php echo route_to('having')?>">Having</a>
          <a class="dropdown-item" href="<?php echo route_to('rollup')?>">Rollup</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</header>
<main role="main" class="flex-shrink-0">
        <?= $this->renderSection('content') ?>
</main>
<footer class="footer mt-auto py-3 bg-dark">
    <div class="container">
        <span class="text-muted">Wenny Prastiwi @2020</span>
    </div>
</footer>
<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>