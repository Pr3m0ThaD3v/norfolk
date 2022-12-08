<?php
    $variable = $_POST; // attempt to store post data

    if (isset($_POST)){
        // storing post makes it a variable
        //Arrays can not be printed as strings
        //Convert array to string with implode function
        $str = implode("", $variable);
        echo $str;
    }

    if($_POST('windows-pc') !== null){
        $winPC = "pc";
        echo "PC";
    } elseif ( $_POST(['laptop']) !== null) {
        echo "LapTop";
    } 
    
?>