<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Jeu</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<?php
include 'Model/GameModel.php';
include 'Controller/GameController.php';
include 'View/GameView.php';

$data_location = "./gameList.json";

$controller = new GameController($data_location);

$controller->getGameById(htmlspecialchars($_GET['id']));

?>

</div>

</body>
</html>
