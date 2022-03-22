<?php
// $username = $_POST['username'];
//$password = $_POST['password']; 
// Old code ^

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');


if (empty($username)) {
    $nameErr = 'Please insert your username';
} elseif (strlen($username) < 10) {
    $nameErr = "Your username should be at least 10 characters";
}

if (empty($password)) {
    $passwordErr = 'Please insert your password';
} elseif (strlen($password) < 6) {
    $passwordErr = "Your password should be at least 6 characters";
}


if (empty($nameErr) && empty($passwordErr)) {
    include('confirmation.php');
} else {
    include('index.php');
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>

</html>