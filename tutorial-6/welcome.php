<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        /* Card container */
        .welcome-card {
            background: white;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            text-align: center;
            max-width: 500px;
            width: 90%;
        }

        /* Success Icon or Circle */
        .icon-box {
            width: 80px;
            height: 80px;
            background: #d4edda;
            color: #28a745;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            margin: 0 auto 20px;
        }

        h2 {
            color: #2d3436;
            font-size: 28px;
            margin-bottom: 10px;
        }

        p {
            color: #636e72;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        /* Logout button */
        .btn-logout {
            display: inline-block;
            padding: 12px 30px;
            background: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: background 0.3s ease;
        }

        .btn-logout:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>

    <div class="welcome-card">
        <div class="icon-box">✓</div>
        <h2>Login Successful!</h2>
        
        
        <a href="logout.php" class="btn-logout">Logout</a>
    </div>

</body>
</html>