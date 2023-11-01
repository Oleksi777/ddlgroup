<?php

include_once "CameraInterface.php";
include_once "CameraModul.php";

class Camera extends ElectronicsInterface implements CameraInterface
{
    use CameraModul;

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

}
//    public function powerOFF()
//    {
//        $this->power = false;
//        echo 'ви вимкнули камеру $this->deviceName';
//        echo "<br>";
//    }
//
//    public function powerOn()
//    {
//        $this->power = true;
//        echo ' камера увімкнута ';
//        echo "<br>";
//    }
