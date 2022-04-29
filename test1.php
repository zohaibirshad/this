<?php
$arr = [1,2,3,4,5,6,6,7,8,8,7,9,9];

$old_arr = array();

for($i=0 ; $i<sizeof($arr) ; $i++){
    $occur = 1;
    if(!in_array($arr[$i], $old_arr)){
    for($j = 0 ; $j < sizeof($arr) ; $j++){
            if($arr[$i] == $arr[$j] && $i != $j){
                $occur++;
            }
        }
    }else{
        continue;
    }

    array_push($old_arr, $arr[$i]);

    echo $arr[$i]." ".$occur." TIMES   ";
    echo nl2br("\n");
}

function dd($data){
    echo "<pre>";
    print_r($data);
}
?>