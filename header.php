<?php
  if(!isset($page_title)) { $page_title = ' Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Header<?php echo $page_title; ?></title>
    <meta charset="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" media="all" href="style.css" />
  </head>

  <body>
    <header>
      <h1>Header</h1>
    </header>
<div class="container-fluid">
    <nav>
      <ul>
        <li><a href="index.php" class="btn btn-primary ">Menu</a></li>
      </ul>
    </nav>
</div>