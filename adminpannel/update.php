<?php
 error_reporting(0);
 session_start();

 include "connetion.php";

 $uid=$_GET['id'];
 echo $uid;



$sql="select * from student where id=$uid";
echo $sql;
$query = mysqli_query($con ,$sql) or die("Error in Query");
$arr= mysqli_fetch_array($query);
$oname=$arr['name'];
$oaddress=$arr['add'];
$ophone_no=$arr['phone_no'];
$oemail=$arr['email'];

$opassword=$arr['password'];
?>

<html>
<body>
    

<form method="post">

 <input type="text" name="name" value = <?php echo $oname;?>><br/>
<input type="text" name="address"  value = <?php echo $oaddress;?>><br/>
<input type="text" name="phone_no"  value = <?php echo $ophone;?>><br/>
<input type="text" name="email"  value = <?php echo $oemail;?>><br/>
<input type="text" name="password"  value = <?php echo $opassword;?>><br/>


<input type="submit" value="update" name="update" />
<input type="Reset" id="">
</form>
</body>
</htm

<?php

if(isset($_POST['update']))
{


$nname=$_POST['name'];
$nadress=$_POST['adress'];
$nphone=$_Post['email'];
$npassword=$_POST['password'];
echo "insreted";




}


 

?>