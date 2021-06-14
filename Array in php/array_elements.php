<?php
$array = [0 => "a", 1 => "b", 2 => "c"];
unset($array[1]);

print_r($array);
// ↑ Key which you want to delete