<?php

include_once "Mp3Player.php";
include_once "Camera.php";
include_once "iphone.php";

$mp3Player = new Mp3Player();

$mp3Player->powerOFF();
$mp3Player->playMusic();
$mp3Player->powerOn();
$mp3Player->playMusic();
$mp3Player->powerOFF();
$mp3Player->powerOn();
$mp3Player->prevSong();
$mp3Player->nextSong();


echo "=================== <br>" ;
$camera = new Camera ();

$camera->powerOFF();
$camera->takeFoto();
$camera->powerOn();
$camera->takeFoto();
$camera->recVideo();
$camera->macroFoto();
$camera->nextFoto();
$camera->prevFoto();
$camera->powerOFF();

echo "======================= <br>";
$iphone = new iphone ();

$iphone->powerOFF();
$iphone->callTo();
$iphone->powerOn();
$iphone->callTo();
$iphone->powerOFF();
$iphone->acceptCalls();
$iphone->powerOFF();

