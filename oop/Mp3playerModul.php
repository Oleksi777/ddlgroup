<?php

trait Mp3playerModul
{
    public function nextSong()
    {
        if (false==$this->power) {
            echo 'плеєр вимкнутий';
            echo "<br>";
        } else {
            echo 'наступна пісня';
            echo "<br>";
        }

    }

    public function prevSong()
    {
        if (false==$this->power) {
            echo 'плеєр вимкнутий';
            echo "<br>";
        } else {
            echo 'попередня пісня';
            echo "<br>";
        }
    }



    public function playMusic()
    {
        if (false==$this->power) {
            echo 'плеєр вимкнутий';
            echo "<br>";
        } else {
            echo 'граю пісню';
            echo "<br>";
        }
    }
}