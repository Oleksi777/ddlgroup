<?php

 $elec = ['phone','laptop', 'TV','monitor','vacuum claener'];

$elec = implode(",", $elec);

$elec = str_replace(',', '.', $elec);

var_dump($elec);
