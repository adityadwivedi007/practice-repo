<?php
 error_reporting(0);
 session_start();

 include "connetion.php";

 $uid=$_GET['id'];
 //echo $uid;



$sql="select * from student where id=$uid";
echo $sql;
$query = mysqli_query($con ,$sql) or die("Error in Query");
$arr= mysqli_fetch_array($query);
$oname=$arr['name'];
$oaddress=$arr['address'];
$ophone_no=$arr['phone_no'];
$oemail=$arr['email'];
echo $oaddress;
$opassword=$arr['password'];
?>

<html>
<body>
    

<form method="post">

 <input type="text" name="name" value = <?php echo $oname;?>><br/>
<input type="text" name="address"  value = <?php echo $oaddress;?>><br/>
<input type="text" name="phone_no"  value = <?php echo $ophone_no;?>><br/>
<input type="text" name="email"  value = <?php echo $oemail;?>><br/>
<input type="text" name="password"  value = <?php echo $opassword;?>><br/>


<input type="submit" value="update" name="update" />
<input type="Reset">
</form>
</body>
</html>

<?php
 include "connetion.php";

if(isset($_POST['update']))
{
$nname=$_POST['name'];
$naddress=$_POST['address'];
$nphone=$_POST['phone_no'];
$nemail=$_POST['email'];
$npassword=$_POST['password'];



$sql3="update student set name ='$nname',address ='$naddress',phone_no=$nphone,email='$nemail',password='$npassword' where id='$uid'";
echo $sql3;

$query3= mysqli_query($con,$sql3) or die("error in query");


if($query3)
{
    echo "connected query";
}
else
{
    echo " not connected";
}
mysqli_close($con);
}

?>