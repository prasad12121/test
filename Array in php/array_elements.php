<?php
$array = [0 => "a", 1 => "aa", 2 => "c"];
unset($array[1]);
// ↑ Key which you want to delete
$array = [0 => "a", 1 => "ccc", 2 => "c"];

array_splice($array, 1, 1);



$array = [0 => "a", 1 => "b", 2 => "c", 3 => "c"];
$array = array_diff($array, ["a", "c"]);
// ↑ Offset which you want to delete