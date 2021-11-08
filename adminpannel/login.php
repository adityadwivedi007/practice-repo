<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method ="post">
    email <input type="text" name ="email"><br/>
    password <input type="text" name="pass"> <br/>   
    <input type="submit" name="Login" value="Login">
    <input type="submit" name="signup" value="Signup">

</body>
</html>
<?php
    if(isset($_POST['Login']))
    {
        $semail=$_POST['email'];
        $spass=$_POST['pass'];  

        error_reporting(0);

        $con=mysqli_connect("localhost:3306","root","","student1") or die("Error in Connection");
        $sql="select * from student where email='$semail' and password='$spass'";
        echo $sql;
        $query=mysqli_query($con,$sql) or die("Error in query");

        $rows=mysqli_num_rows($query);

        if($rows>0)
        {
            session_start();
            $_SESSION['email']=$semail;
            // $_SESSION['name']=$name
            header('Location:deskboad.php');
            
        }
        else
        {
            // echo "<script>'alert('Incorrect Username or password')</script>";
            echo "Incorrect Username or password";
        }
    }

    else if(isset($_POST['signup'])){
        header('Location:signup.php');
    }


mysqli_close($con);
?>









