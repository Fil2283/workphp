<?php
function convertTimeTo24HourFormatWithSeconds($s) {
    $isPM = substr($s, -2) === "PM";

    $s = str_replace(["AM", "PM"], "", $s);

    list($hours, $minutes, $seconds) = explode(":", $s);

    if ($isPM && $hours !== "12") {
        $hours = (int)$hours + 12;
    }
    if (!$isPM && $hours === "12") {
        $hours = "00";
    }
    return "$hours:$minutes:$seconds";
}

$time12 = "03:30:45 PM";
$time24 = convertTimeTo24HourFormatWithSeconds($time12);
echo $time24;
?>
