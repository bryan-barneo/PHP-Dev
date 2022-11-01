<?php
function estPalindrome(string $n):bool{
    $P=1;
    $m=strlen($n)-1;
    $t=strlen($n)/2;
    while($i<=$t){
    $i=$i+1;
        if($n[$i]!=$n[$m-$i]){
            $P=0;
        }
    }
    
    return $P;
}
