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
    
    include 'conn.php';

    $sql= "insert into user(firstname, lastname, email, password)
    values('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[password]')";

            if(!mysqli_query($conn, $sql)){

                die('Error: ' . mysqli_connect_error());

            }
            echo "1 record successfully added...";
    
    ?>
</body>
</html>