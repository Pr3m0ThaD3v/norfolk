<?php 

if(isset($_POST['submit'])){
    if(isset($_POST['input'])){
        foreach ($_POST['input'] as $value) {
            $out_put = $value;
            
            $ToWrite = $out_put;
            
            echo $ToWrite . "\n";
        }
        
        
    }

    else {
        $openFile = fopen("data.txt", 'a');
        $writeToFile = fwrite($openFile, $ToWrite);
        fclose($openFile);
    }
}