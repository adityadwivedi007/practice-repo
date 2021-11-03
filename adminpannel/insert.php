<html>
<body>
<form method="get">
Id: <input type="text" name="id"><br/>
Name: <input type="text" name="name"><br/>
Address<input type="text" name="address"><br/>
phone_no<input type="text" name="phone_no"><br/>
email<input type="text" name="email"><br/>
password<input type="text" name="password"><br/>


<input type="submit" value="Insert" name="Insert"/>
</form>
</body>
</html>

<?php
 error_reporting(0);
 include "connetion.php";
if(isset($_GET['Insert']))
{
    $sid=$_GET['id'];
    $sname=$_GET['name'];
    $saddress=$_GET['add'];
    $sphone_no=$_GET['phone_no'];
    $semail=$_GET['email'];
    $spassword=$_GET['password'];
   

echo $sid;

$sql="Insert into student(id,name,address,phone_no,email,password) values($sid,'$sname','$saddress',$sphone_no,'$semail','$spassword')";
echo $sql;

$query=mysqli_query($con,$sql) or die("Error in connection");
 
if($query)
{
    echo "data Inserted";
}
else
{
    echo "data not Inserted";
}

mysqli_close($con);
}
?>