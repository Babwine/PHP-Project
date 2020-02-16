<?php

class GameView {
  public $gameModel;

  public function __construct($gameModel) {
    $this->gameModel = $gameModel;
  }

  public function displayGame() {
    $game = $this->gameModel;
        echo "<div id='game'>";
          echo "<img class='game-img' src='$game->imageUrl' alt='$game->name'/>";

          echo "<div class='game-content'>";

            echo "<h2 class='game-name'>$game->name</h2>";
            echo "<h3 class='game-price'>Prix : $game->price"."€</h3>";
            echo "<ul class='game-details'>";
              echo "<li class='game-editor'>Plate-formes : $game->platform</li>";
              echo "<li class='game-editor'>Editeur : $game->editor</li>";
              echo "<li class='game-developer'>Développeur : $game->developer</li>";
              echo "<li class='game-release-date'>Date de sortie : $game->releaseDate</li>";
            echo "</ul>";

          echo "</div>";


          echo "<p class='game-description'>$game->description</p>";

        echo "</div>";
        echo "<a href='catalogue.php'><button>Retour</button></a>";

        echo "<script type='text/javascript'>
                  document.title = '$game->name'
              </script>";
  }

}

?>
