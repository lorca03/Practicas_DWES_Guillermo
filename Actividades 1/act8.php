<?php
$num=  $_POST["num"];
$resultdo=1;
for ($i=1; $i < $num; $i++) { 
    $resultdo=$resultdo*($i+1);
}
echo $resultdo;