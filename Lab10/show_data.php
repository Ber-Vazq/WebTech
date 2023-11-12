<?php 
$file = fopen("data.txt", "r");
$dataArray = [];
while (($line = fgets($file)) !== false){
    $dataArray[] = explode(" ", trim($line));
}
fclose($file);
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