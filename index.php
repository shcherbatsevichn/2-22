<?php error_reporting(-1);
//В массиве А(N) найти максимальный из элементов, встречающихся только один раз.    
$A = [1, -7, -4, 2, -7, 2, 3, 3, -199, 4, 1, 4, -20, 6, 6, 3, 8, -4, 13, 9];
$p = 4;

echo("A(n):<br>");
print_r($A);
echo("<br>Result:<br>");
$a = search_max_uni($A);
print_r($a);

function search_max_uni($array){
    $arr = get_uni_elem($array);
    $maxvl = $arr[0];
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] > $maxvl){
            $maxvl = $arr[$i];
        }
    }
    return $maxvl;
}

function get_uni_elem($array){ //формируетт массив из уникальных эементов 
    $res = [];
    $n = 0;
    for ($i = 0; $i < count($array); $i++){
        if(count_elem_array($array, $array[$i]) == 1){
           $res[$n] = $array[$i];
           $n++; 
        }
    }
    return $res;
}        

function count_elem_array($array, $elem){ //считает, сколько раз элемент встречается в массиве
    $counter = 0;
    for($i = 0; $i < count($array); $i++){
        if($array[$i] == $elem){
            $counter++;
        }
    }
    return $counter;  
}