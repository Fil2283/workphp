<?php
/*
Задание 2 
написать цикл который строит лесенку из символа #
ее высота задается параметром n
*/
$n = 6;
function staircase($n){
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $n; $j > $i; $j--) {
            echo " ";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "#";
        }
        echo "<br>";// почемуто не работает PHP_EOL имено в visual studia cod;
    }
}

staircase($n);


?>

