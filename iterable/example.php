<?php

function printiterable(iterable $myiterable){

    foreach ($myiterable as $item){
        echo $item;
    }

}



$arr = ["a", "b", "c"];
printIterable($arr);