<?php
session_start();
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
    <?php
    if(isset($_SESSION['username']))
    {
    ?>
    <h4>Hey <?php echo $_SESSION['username']; ?> you have successfully logged in... <a href="logout.php">Log Out?</a></h4>
    <?php }else{?>
        <h4>Status: LOGGED OUT</h4>
        <?php }?>
    <form action="authentication/login_Authenticate.php" method="POST">
        <label for="username"> Username:<input type="text" name="username"></label>
        <label for="pwd"> Password:<input type="password" name="pwd"></label>
        <button type="sumbit" name="submit">Login</button>
    </form>
    
</body>
</html>