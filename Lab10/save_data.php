<?php
//something something opens and reads the data to display on a table in index.html
if($_SERVER["wtLabs"] = "POST"){
    $fname = $_POST["fname"];
    $lname = $_POST["f"];
    $data = $fname . " " . $lname . "\n";

    $file = fopen("data.txt", "a");
    fwrite($file, $data);
    fclose($file);
}
?>