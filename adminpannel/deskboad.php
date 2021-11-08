<?php
    include "connetion.php";
     session_start();
     $semail=$_SESSION['email'];
    $sql4="SELECT name FROM student WHERE email='$semail';";
    //echo $sql4;
    $query4=mysqli_query($con,$sql4) or die("Error");
    $row3 = mysqli_fetch_array($query4);
    echo "<h3> Hello, ",$row3['name'],"</h2>";
     if($_SESSION['email']=='')
     {
        header('location:login.php');
     }
     else
     {
         include "connection";
     }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
<input type="submit" name="logout" value="logout">
</form>
<?php
 if(isset($_POST['logout'])){
     header('Location:logout.php');
 }



?>
</body>
</html>
<?php

$query=mysqli_query($con,"Select * from student") or die("Error in Query");

echo "<table border=3><tr><td>id</td><td>name</td><td>address</td><td>mobile</td><td>email</td><td>password</td><td>Edit</td><td>Delete</td></tr>";
while($row=mysqli_fetch_array($query))
{
    echo "<tr>";
    $uid=$row['id'];
    echo "<td>".$row['id']."</td>";
    
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['phone_no']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['password']."</td>";
    
    echo "<td><a href=update.php?id=$uid>edit</a></td>";
    echo "<td><a href=delete.php?id=$uid>delete</a></td>";
     

   

    echo "</tr>";
    
}
echo "</table>";
mysqli_close($con);

?>
 
 


