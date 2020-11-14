<?php
echo "DATA AWAL = lanirne, aduh, qifuat, toda, anevi, samid, kifuat<br>";
echo "Setelah Di sortir = ";
$data_acak = ["lanirne","aduh","qifuat","toda","anevi","samid","kifuat"];
sort($data_acak, SORT_STRING);
foreach($data_acak as $tersortir){
    echo str_pad($tersortir, 7). ", ";
}
?>