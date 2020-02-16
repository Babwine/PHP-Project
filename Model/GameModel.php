<?php

class GameModel {

  public $id;
  public $name;
  public $imageUrl;
  public $platform;
  public $price;
  public $editor;
  public $developer;
  public $releaseDate;
  public $description;

  public function __construct(
    int $id,
    string $name,
    string $imageUrl,
    string $platform,
    float $price,
    string $editor,
    string $developer,
    string $releaseDate,
    string $description
  )
  {
    $this->id = $id;
    $this->name = $name;
    $this->imageUrl = $imageUrl;
    $this->platform = $platform;
    $this->price = $price;
    $this->editor = $editor;
    $this->developer = $developer;
    $this->releaseDate = $releaseDate;
    $this->description = $description;
  }
}

?>
