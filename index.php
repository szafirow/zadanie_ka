<?php
#porównywanie dwóch tablic - sposob 1
$array1 = array(1, 2, 0, 4, 5);
$array2 = array(4, 3, 3, 5);

// elementy, które są w array1, a nie ma ich w array2
$diff1 = array_diff($array1, $array2);
print_r($diff1);

// elementy, które są w array2, a nie ma ich w array1
$diff2 = array_diff($array2, $array1);
print_r($diff2);

// elementy wspólne w obu tablicach
$inters = array_intersect($array1, $array2);
print_r($inters);

echo "<br>";
#porównywanie dwóch tablic - sposob 2

$array1 = array(1, 2, 3, 4, 5, 6);
$array2 = array(1, 2, 3, 1, 5, 23);

for ($i = 0; $i < 6; $i++) {
    $zm = false;
    for ($j = 0; $j < 6; $j++)
        if ($array1[$i] == $array2[$j]) {
            echo "Tablica zawiera liczbe " . $array1[$i] . "<br>";
            $zm = true;
            break;
        }
    if ($zm == false) {
        echo "Tablica nie zawiera liczbe " . $array1[$i] . "<br>";;
    }
}
