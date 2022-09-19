<?php
$num = 4;
$cont = 0;
for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $cont ++;
    }
}
if ($cont == 2) {
    echo "Primo";
}else {
    echo "No Primo";
}

