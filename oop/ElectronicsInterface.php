<?php
//
//interface ElectronicsInterface
//{
//
////    public function powerOFF();
////    public function powerON();
////    public function doMainAction();
//
//}
//
abstract class ElectronicsInterface
{


    public function powerOFF()
    {
        $this->power = false;
        echo "вимкнуто $this->deviceName ";
        echo "<br>";
    }


    public function powerOn()
    {
        $this->power = true;
        echo "$this->deviceName увімкнуто ";
        echo "<br>";
    }

    abstract public function doMainAction();

}

