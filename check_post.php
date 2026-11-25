<?php
$isempty = false;
foreach($_POST as $key => $value) {
    if ($value == "") {
        $isempty = true;
        break;
    }
} 
if ($isempty == true) 
    echo "Введите данные";

    
?>