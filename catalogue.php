<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Catalogue</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<?php
include 'Model/GameModel.php';
include 'Controller/GameController.php';
include 'View/GameListView.php';

$controller = new GameController("./gameList.json");

$controller->getGameList();




?>

</div>

</body>
</html>
