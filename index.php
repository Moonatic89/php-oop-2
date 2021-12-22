<?php
require_once __DIR__ . "/classes/user.php";
require_once __DIR__ . "/classes/premium.php";
// include __DIR__ . "/classes/products.php";

$users = [
    new User('Stefano', 'Nesi', 32, 'Moonatic89', 'nesi_stefano@gmail.com', 'pollo123'),
    new Premium('Pamela', 'Bruzzo', 27, 'Naminiel', 'kirisakipam@hotmail.com', 'pesce321', 50),
];

// $user[1]->discount = 5;

var_dump($users);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    HELLO
</body>

</html>