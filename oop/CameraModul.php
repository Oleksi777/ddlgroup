<?php

trait CameraModul
{

    public function takeFoto()
    {
        if (false == $this->power) {
            echo 'камера вимкнута';
            echo "<br>";
        } else {
            echo 'фото зроблено';
            echo "<br>";
        }

    }

    public function nextFoto()
    {
        if (false == $this->power) {
            echo 'камера вимкнута';
            echo "<br>";
        } else {
            echo 'наступне фото';
            echo "<br>";
        }
    }

    public function prevFoto()
    {
        if (false == $this->power) {
            echo 'камера вимкнута';
            echo "<br>";
        } else {
            echo 'попередне фото';
            echo "<br>";
        }
    }

    public function macroFoto()
    {
        if (false == $this->power) {
            echo 'камера вимкнута';
            echo "<br>";
        } else {
            echo 'зміна режиму фото';
            echo "<br>";
        }
    }

    public function recVideo()
    {
        if (false == $this->power) {
            echo 'камера вимкнута';
            echo "<br>";
        } else {
            echo 'встановлено режим запису відео';
            echo "<br>";
        }
    }
}