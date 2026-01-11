<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="" method="post">
        <div>
            <label for="username">
                Username:
            </label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button type="submit" name="login" value="Login">Login</button>
        </div>
    </form>

    <?php
    include "db.php";

    if(isset($_POST['login'])){
        $username= $_POST['username'];
        $password= $_POST['password'];

        $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";

        $result=mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) ==1){
            header("Location: welcome.php");
        }else{
            echo "<p style='color:red;'>Invalid username or password</p>";
        }
    }
?>
    
</body>
</html>