<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
</head>
<body>
    <h2>Student Management System</h2>
    <form action="" method="POST">
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        Age: <input type="number" name="age"><br>
        Address: <textarea name="address" id=""></textarea><br>
        <input type="submit" name="submit" value="Add Student">

    </form>
    <?php
    include "db.php";
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $age=$_POST['age'];
            $address=$_POST['address'];

            $sql="INSERT INTO students(name,email,age,address)VALUES('$name','$email','$age','$address')";

            if($conn->query($sql) === TRUE){
                echo "New student added successfully";
            }
        }

    ?>
</body>
</html>