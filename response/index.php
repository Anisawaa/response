<?php 

include "db.php";

if (isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = ($_POST['password']);
    
    $querry = "SELECT * FROM staff WHERE username='$username' AND password='$password'";
    $syntax = $conn->query($querry);

    while($row = $syntax->fetch_object()){
        $full_name = $row->full_name;
    }

    $sql = mysqli_query($conn,$querry);
    $check = mysqli_num_rows($sql);

    if($check>0)
    {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['full_name'] = $full_name;

        header("Location: home.php");
    }
    
    else
    {
        echo "<script>alert('Incorrect email and/or password!')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <title>123200049</title>
    </head>

    <body>        
        <div class="container">
            <form action="" method="POST" class="login-email">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
                
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required="">
                </div>
                
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required="">
                </div>
                
                <div class="input-group">
                    <button name="submit" class="btn">Login</button>
                </div>
                
                <p class="login-register-text">Don't have an account? <a href="register.php">Sign Up now!</a></p>
            </form>
        </div>
    </body>
</html>