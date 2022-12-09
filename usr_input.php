<?php
    $variable = $_POST; // attempt to store post data

    if (isset($_POST)){
        // storing post makes it a variable
        //Arrays can not be printed as strings
        //Convert array to string with implode function
        $str = implode("", $variable);
        echo $str;
    }

    //for windows-pc
    echo "<h1>Windows PC</h1>";

    if (isset($_POST['windows-pc'])) {

        echo "<p><b>Computer type:</b>Desktop</p>";

    }elseif (isset($_POST['laptop'])) {

        echo "<p><b>Computer type:</b> Laptop</p>";
    }


    //for Domain
    echo "<h1>Norfolk Domain Access</h1>";

    if (isset($_POST['active-directory'])) {
        
        echo "<p><b>Domain Access</b> Yes</p>";

    }elseif (isset($_POST['active-directory']) == false) {

        echo "<p>No domain access for the new employee.</p>";
    }

    //for  Office 365
    echo "<h1>Office 365</h1>";

    if (isset($_POST['windows-pc'])) {
        echo "<h2></h2>";
        echo "<p><b>Office 365 Account:</b> Yes</p>";
    }
    else{
        echo "<p><b>The new employee will not require an email account.</b></p>";
    }

    
    //for  Software
    echo "<h1>Software</h1>";

    if (isset($_POST['browntechc'])) {
        
        echo "<p><b>BrownTech:</b> Yes</p>";

    }elseif(isset($_POST['tylerbudget'])){
        echo "<p><b>Tyler Budget:</b> Yes</p>";
    }else{
        echo "N/A";
    }

    //for doorfobs
    echo "<h1>Building Access</h1>";
    // what if the user chooses both locations
    // seperate if statements should be made
    if (isset($_POST['doorfob1'])) {
        
        echo "<p><b>Building:</b> 649 High Street</p>";
    } elseif (isset($_POST['doorfob2'])) {
        
        echo "<p><b>Building:</b> 614 High Street</p>";

    }else{

        echo "<p>N/A</p>";
    }

    // for desktop and cell phone

    echo "<h1>Company Phones</h1>";

    if (isset($_POST['desk-phone'])) {
        
        echo "<p><b>Avaya Desk Phone</b></p>";
    }else{
        null;
    }if (isset($_POST['cellphone'])) {
        
        echo "<p><b>Company Cell Phone</b></p>";
    }else{
        null;
    }

    // for employment type
    echo "<h1>Employment Type</h1>";

    if (isset($_POST['fulltime'])) {
        
        echo "<p><b>Employment Type:</b> Full Time</p>";
    }
    // change bottom code back to elseif
    if (isset($_POST['intern'])) {
        echo "<p><b>Employment Type:</b> Internship</p>";
    }
    
    if (isset($_POST['temp'])) {
        echo "<p><b>Employment Type:</b> Contractor/Temp</p>";
    }
    
    else{
        null;
    }
?>
