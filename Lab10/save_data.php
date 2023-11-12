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
<!DOCTYPE html>
<html>

    <head>
        <title>Lab 10 stored data</title>
    </head>
    <body>
        <h1>Data</h1>
        <table border="1">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            <?php foreach ($dataArray as $data): ?>
                <tr>
                    <td><?php echo $data[0];?></td>
                    <td><?php echo $data[1];?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>