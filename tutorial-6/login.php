<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Modern Reset and Font */
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Form Card Styling */
        form {
            background: #ffffff;
            width: 350px;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .heading {
            color: #333;
            margin-bottom: 10px;
            font-size: 24px;
            text-align: center;
        }

        /* Container for labels and inputs */
        form div {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        label {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
            font-weight: 600;
        }

        input {
            padding: 12px;
            border: 2px solid #eee;
            border-radius: 6px;
            transition: border-color 0.3s ease;
            outline: none;
        }

        input:focus {
            border-color: #764ba2;
        }

        /* Button Styling */
        button {
            padding: 12px;
            background: #764ba2;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
            margin-top: 10px;
        }

        button:hover {
            background: #5a3782;
        }

        /* Error Message */
        .error-msg {
            color: #e74c3c;
            text-align: center;
            font-size: 14px;
            margin-top: 15px;
            background: #fdf2f2;
            padding: 10px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <div class="container">
        <form action="" method="post">
            <h2 class="heading">Login Form</h2>
            
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required placeholder="Enter username">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required placeholder="Enter password">
            </div>

            <button type="submit" name="login">Login</button>

            <?php
                include "confiq.php";
                if(isset($_POST['login'])){
                    $username= mysqli_real_escape_string($conn, $_POST['username']);
                    $password= $_POST['password']; 

                    $sql="SELECT * FROM users WHERE username ='$username' AND password='$password'";
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) == 1){
                        header("Location: welcome.php");
                    } else {
                        echo "<p class='error-msg'>Invalid Username or Password</p>";
                    }
                }
            ?>
        </form>
    </div>

</body>
</html>