<?php

    function drawLine($kata){
        for( $kata;$kata>=1;$kata--){

            for($b=1;$b<=8-$kata;$b++){
            echo " ";
            }

        echo" $kata";
        }

        return $kata;
    }

    echo drawLine('Bootcamp');

    