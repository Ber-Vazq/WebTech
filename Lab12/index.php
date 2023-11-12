<?php
if(isset($_COOKIE['cs4413'])){
    echo "Cookie has already been set. Don't overbake it. value: " . $_COOKIE['cs4413'];
}
else{
    $cookie_value = "cs4413 is the best";
    $expiration = time() + (2*60);

    setcookie('cs4413', $cookie_value, $expiration, '/');
    echo "<script>alert('The cookie cs4413 has been placed into the oven with the value:  . $cookie_value');</script>";
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 12: Cookies</title>
</head>

<body>
    <header>
        <h1>Lab 12</h1>
    </header>
    <p>
        Just playing around with setting cookies this lab.
    </p>
</body>

</html>