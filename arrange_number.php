<?php

function arrangeArray($arr) {
    $num = count($arr);
    $result = [];

    for ($i = 0; $i < $num - 1; $i++) {

        for ($j = 0; $j < $num -1; $j++) {

            if ($arr[$j] < $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;

                $result[] = $arr; 

            }
        }
    }
    return $result;

}

// Example 1
    $input1 = [1, 2, 5];
    $output1 = arrangeArray($input1);

    foreach ($output1 as $step) {
        echo "[" . implode(",", $step) . "]" . "\n";
    }

// Example 2

$input2 = [4, 1, 2, 5];
$output2 = arrangeArray($input2);

foreach ($output2 as $step) {
    echo "[" . implode(", ", $step) . "]" . "\n";
}





?>  