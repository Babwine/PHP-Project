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

$gameId = htmlspecialchars($_GET['id']);
if ($gameId !== null && filter_var($gameId, FILTER_VALIDATE_INT) !== false) {
  $controller->getGameById($gameId);
} else {
  echo "Aucun jeu trouvé.";
}

?>

</div>

</body>
</html>
