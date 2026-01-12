<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student</title>

</head>
<body>
    <h2>Delete Student</h2>
    <form action="" method="POST">
        ID: <input type="text" name="id"> <br>
        <input type="submit" name="delete" value="Delete Student">
    </form>

    <?php
    include "db.php";

    if(isset($_POST['delete'])){
        $id=$_POST['id'];

        $sql="DELETE FROM students WHERE id='$id'";

        if($conn->query($sql)===TRUE){
            echo 'Student deleted successfully!';
        }
    }
    ?>
</body>
</html>