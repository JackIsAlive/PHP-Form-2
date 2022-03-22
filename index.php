<?php
if(!isset($username)) {
    $username='';
}

if(!isset($password)) {
    $password='';
}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="img_container"> <img src="https://d1fdloi71mui9q.cloudfront.net/dumkf6YTWWo75oCM7AFW_Q66UGMYxSx55jrUv">
            </div>
            <form action="results.php" method="POST">
                <input type="text" name="username" id="username" placeholder="Username" value="<?php echo htmlspecialchars ($username)?>"> <br>
               <?php if(isset($nameErr)) { ?>
                    <p><?php echo $nameErr?></p>
                
               <?php } ?>

                <input type="password" name="password" id="password" placeholder="Password" value="<?php echo htmlspecialchars ($password)?>"> <br>
                <?php if(isset($passwordErr)) {?>
                <p><?php echo $passwordErr?></p>
            <?php } ?> 
                <input type="submit" value="Register" class="register_button">
            </form>
        </div>


</body>

</html>