<?php
function rotLeft($array, $d) {
    $result = [];
    $count = count($array);

    $currentIndex = $d % $count;

    for ($i = 0; $i < $count; $i++) {
        $result[] = $array[$currentIndex];
        $currentIndex ++;

        if ($currentIndex >= $count) {
            $currentIndex = 0;
        }
    }

    return $result;
}


$d = 4;
$array = [1, 2, 3, 4, 5];

$printLine =  implode(' ', rotLeft($array, $d));
echo $printLine;