<?php
$con = mysqli_init();
mysqli_real_connect($con, "wtlabsql.mysql.database.azure.com", getenv("DB_USERNAME"), getenv("DB_PASSWORD"), "wtlabsql", 3306);

if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

echo "Connected successfully";
mysqli_close($con);
?>
