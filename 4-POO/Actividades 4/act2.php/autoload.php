<?php
function app_autoloader($clase){
    require "./clases/$clase.php";
}
spl_autoload_register("app_autoloader");