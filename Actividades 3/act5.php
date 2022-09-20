<?php
    $num=0;
    $sum=0;
    if ($num>=0) {
        for ($i=$num+1; $i<=($num+100); $i++) { 
            $sum+=$i;
        }
    }
    echo $sum;