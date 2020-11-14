<?php
echo "Buatlah program untuk mencari bilangan prima dari 1 – 50 tanpa menggunakan fungsi
bawaan! <br>";
echo "Yang merupakan prima adalah = ";
for($i =1;$i<=50;$i++){
    $x =0;
    for($j=1;$j<=$i;$j++){
        if($i%$j==0){
            $x++;
        }
    }
    if($x== 2){
        echo $i.", ";
    }
}
?>