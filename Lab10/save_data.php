<?php
//something something opens and reads the data to display on a table in index.html
if($_SERVER["REQUEST_METHOD"] = "POST"){
    $fsong = $_POST["fsong"];
    $fgenre = $_POST["fgenre"];
    $data = $fsong . " " . $fgenre . "\n";

    $file = fopen("", "a");
    fwrite($file, $data);
    fclose($file);
}
?>