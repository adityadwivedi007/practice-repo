

<?php


$con=mysqli_connect("localhost:3306","root","","student1") or die("Error in Connection");

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
 
 


