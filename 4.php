<?php

    $key = array('out','stand','king','and');
    $word = 'outstanding'; 
    
    if ($key[0]==$word){
        echo "$key[0]=>false";
    }else {
        echo "$key[0]=>true";
    }

    echo'</br>';

    if ($key[1]==$word){
        echo "$key[1]=>false";
    }else {
        echo "$key[1]=>true";
    }

    echo'</br>';

    if ($key[2]==$word){
        echo "$key[2]=>false";
    }else {
        echo "$key[2]=>true";
    }

    echo'</br>';
    
    if ($key[3]==$word) {
        echo "$key[3]=>false";
    }else {
        echo "$key[3]=>true";
    }

    function valid($key,$word){
        
        return $key; $word;
    }       


    valid($key[0],$word);
    valid($key[1],$word);
    valid($key[2],$word);
    valid($key[3],$word);