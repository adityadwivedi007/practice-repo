<html>
<body>
<form method="get">

Name: <input type="text" name="name"><br/>
Address<input type="text" name="address"><br/>
phone_no<input type="text" name="phone_no"><br/>
email<input type="text" name="email"><br/>
password<input type="text" name="password"><br/>


<input type="submit" value="signup" name="signup">

</form>
</body>
</html>

<?php
 error_reporting(0);
 include "connetion.php";
if(isset($_GET['signup']))
{
  
    $sname=$_GET['name'];
    $saddress=$_GET['address'];
    $sphone_no=$_GET['phone_no'];
    $semail=$_GET['email'];
    $spassword=$_GET['password'];
   
$sql="Insert into student(name,address,phone_no,email,password) values('$sname','$saddress',$sphone_no,'$semail','$spassword')";
//echo $sql;

$query=mysqli_query($con,$sql) or die("Error in query");
 
if($query)
{
    echo "data Inserted";
    header('location:login.php');
}
else
{
    echo "data not Inserted";
}

mysqli_close($con);
}
?>