<?php
class Movie
{
  public $title;
  public $genere;

  public $releaseDate;

  function __construct($_title, $_genere, $_releaseDate)
  {
    $this->title = $_title;
    $this->genere = $_genere;
    $this->releaseDate = $_releaseDate;
  }

  public function getFullInfo()
  {
    return ' title : ' . $this->title . ' Genere ' . $this->genere . ' Data di uscita : ' . $this->releaseDate . ' Anno ';
  }
}