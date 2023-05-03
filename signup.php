<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleSheets/signup.css">
    <title>SignUp</title>
</head>
<body>
    
<div class="container">

<form class="SignUp" action="authentication/signup_Authenticate.php" method="post">
    <fieldset>

        <fieldset class="innerField">
        
            <legend>Sign Up</legend>

            <label for="name">Name: <input type="text" name="name" placeholder="Enter Full Name"></label>

            <label for="email">Email: <input type="email" name="email"placeholder="Enter Emsil Address" ></label>

            <label
             for="cellNum">Cell Phone Number: <input type="tel" name="cellNum"placeholder="+27 777 111 2222"></label>

            <label for="username">Create a username: <input type="text" name="username" placeholder="Enter Username" ></label>

            <label for="pwd">Create A Password: <input type="password" name="pwd" placeholder="Enter Password"></label>

            <label for="pwd_confirm">Confirm Password: <input type="password" name="pwd_confirm" placeholder="Re-enter Password"></label>

            <button type="submit" name="submit">SignUp!</button>
            <h3>Already have an account <a href="login.php">LOGIN</a></h3>
        </fieldset>
        
    </fieldset>

</form>

</div>
</body>
</html>