<?php

include_once "iphoneInterface.php";
include_once "Mp3playerModul.php";
include_once "Mp3PlayerInterface.php";
include_once "CameraModul.php";

class iphone extends ElectronicsInterface implements Mp3PlayerInterface, iphoneInterface
{
    use Mp3playerModul;
    use CameraModul;

    public $deviseName = "Apple iPhone 13 Pro Max";

    public $power = false;
    private $delimetr = "<br>";

    public function doMainAction()
    {
        $this->call();
    }

    public function callTo()
    {
        if (false == $this->power) {
            echo "Smartphon вимкнений";
            echo "<br>";
        } else {
            echo "наберайте номер до кого хочете дзвонити";
            echo "<br>";
        }

    }

    public function acceptCalls()
    {
        if (false == $this->power) {
            echo "Smartphon вимкнений";
            echo "<br>";
        } else {
            echo "прийняти дзвінок";
            echo "<br>";
        }

    }

    public function powerOn()
    {
        echo "Hello";
        parent::powerOn();
        echo "<br>";
    }
}