<?php
function Time($t)
{
    $PM = substr($t, -2) === "PM";

    $t = str_replace(["AM", "PM"], "", $t);

    list($h, $m, $s) = explode(":", $t);

    if ($PM && $h !== "12") {
        $h = (int)$h + 12;
    }
    if (!$PM && $h === "12") {
        $hours = "00";
    }
    return "$h:$m:$s";
}
$t = "03:30:45 PM";
$t = Time($t);
echo $t; // Вывод: "15:30:45"
