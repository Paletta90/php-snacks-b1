<?php 
    $numRandom;
    $array = [];

    for($i = 0; $i < 15; $i++){

        $numRandom = rand(1, 50);

        if( !in_array($numRandom, $array) ){

            $array[] = $numRandom;

        }else{
            $i--;
        }
    }

    var_dump($array);

?>