<?php

include_once "ElectronicsInterface.php";
include_once "Mp3PlayerInterface.php";
include_once "Mp3playerModul.php";

class Mp3Player extends ElectronicsInterface implements Mp3PlayerInterface
{
    use Mp3playerModul;

    public $deviceName = "MP3Player";

    public $power = false;
    private $delimetr = "<br>";

    public function doMainAction()
    {
        $this->playerMusic();
    }


    public function powerOn()
    {

        echo "Добро пожаловать";
        parent::powerOn();
        echo "<br>";
    }

//    public function powerOFF()
//    {
//        $this->power = false;
//        echo "ви вимкнули $this->deviceName ";
//        echo "<br>";
//    }
//
//    public function powerOn()
//    {
//        $this->power = true;
//        echo "$this->deviceName увімкнутий ";
//        echo "<br>";
//    }


}