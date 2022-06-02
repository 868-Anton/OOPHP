<?php

//create a song class
class Song{
  
  //create songId and title public properties
  public $songId;
  public $title;
}
//Instantiate an "Octopus's Garden" song using the new keyword
$octopusSong = new Song();
$octopusSong ->songId = 1;
$octopusSong ->title = "Octopus's Garden";

// var_dump and check in the browser
//var_dump($octopusSong);
//object(Song)#1 (2) { ["songId"]=> int(1) ["title"]=> string(16) "Octopus's Garden" }

class Playlist{
  public $name;
  public $songs = [];

  public function addSong($song){
    $this->songs[] = $song;
  }
}

$playlist = new Playlist();
$playlist->name = 'Rock!';
$playlist->addSong($octopusSong);
//var_dump($playlist);

//Instantiate a song object of your favorite song
$beatingMeDown = new Song();

//Set a songId and title
$beatingMeDown->songId= 2;
$beatingMeDown->title= 'beating me down';

//Add the song to the Rock playlist
$playlist->addSong($beatingMeDown);

var_dump($playlist);