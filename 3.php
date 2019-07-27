<?php
    function bilangan_prima($limit) {
    $prima = array();
    
    for ($i=2; $i<=$limit; $i++)
        $prima[$i] = true;

    $akarLimit = (int)sqrt($limit);
    
    for ($i=2; $i<=$akarLimit; $i++) {
        if ($prima[$i]) {
        for ($j=$i*$i; $j<=$limit; $j+=$i) {
        $prima[$j] = false;
        }
        }
    }

    $i = 0;

    foreach ($prima as $bilangan=>$status) {
        if ($status) { echo "$bilangan ";$i++; }
    }
    
    
    }

    bilangan_prima(4,3); //menampilkan bilangan prima dari 1 - 1 juta

