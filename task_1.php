<?php
/*
Задание 1 
Выполните функцию simpleArraySum в редакторе ниже. 
Она должна возвращать сумму элементов массива в виде целого числа.
*/
$ar = [1, 2, 3, 4, 10, 11];
function simpleArraySum($ar) {
    $sum =0;
    foreach($ar as $value){
        $sum += ($value);
    }
    return $sum;
}
$rezultat = simpleArraySum($ar);
echo $rezultat;
