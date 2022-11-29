<?php

// Check for form submission
if (isset($_GET['submit'], $_GET['email'])) {
    $var = $_GET['laptop'];
    if(isset($var)) {
        echo "Positive";
    }
}
