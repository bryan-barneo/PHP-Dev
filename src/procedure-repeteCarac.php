<?php
function repeteCarac(int $n, string $car):void {
    for($i=0; $i<$n; $i++){
        echo $car;
        $car=$car++;
    }
}
