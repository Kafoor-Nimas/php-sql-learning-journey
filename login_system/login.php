<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .heading{
            text-align:center;
            margin-bottom:20px;
        }
        body{
            padding:20px;
        }
        form{
            width:300px;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            gap:10px;
            border:1px solid black;
            margin:auto;
        }
        p{
            text-align:center;
        }
    </style>
</head>
<body>
    <h2 class="heading">Login Form</h2>
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