<?php
//accessing values using list assignment
$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

foreach ($array as [$val1, $val2, $val3]) { //
    echo "Values: $val1, $val2, $val3\n";
}


//accessing values the normal way using foreach
$array2 = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

foreach ($array2 as $subArray) {
    foreach ($subArray as $value) {
        echo "Value - : $value\n";
    }
}

//accessing values using for loop
$array3 = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

for ($i = 0; $i < count($array3); $i++) {
    for ($j = 0; $j < count($array3[$i]); $j++) {
        $value = $array3[$i][$j];
        echo "Value -- : $value\n";
    }
}
