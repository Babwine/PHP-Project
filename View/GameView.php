<?php

class GameView {
  public $gameModel;

  public function __construct($gameModel) {
    $this->gameModel = $gameModel;
  }

  public function displayGame() {
    $game = $this->gameModel;
        echo "<div class='game'>";
          echo "<img class='game-img' src='$game->imageUrl' alt='$game->name'/>";

          echo "<div class='game-content'>";

            echo "<h2 class='game-name'>$game->name</h2>";
            echo "<p class='game-price'>Prix : $game->price"."€</p>";

          echo "</div>";

        echo "</div>";
        echo "<a href='catalogue.php'><button>Retour</button></a>";

        echo "<script type='text/javascript'>
                  document.title = '$game->name'
              </script>";
  }

}

?>
