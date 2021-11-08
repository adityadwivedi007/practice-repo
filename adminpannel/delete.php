<?php
    

    session_start();
    $uid = $_GET['id'];

    include "connetion.php";
    
    
    //getting the previous info
    $sql3 = "delete from student where id='$uid'";

	$query3 = mysqli_query($con,$sql3) or die("query failed.");


		if($query3){
			echo "data deleted successfully.";
            header('Location:deskboad.php');
		}
        else
        {
                echo "failed to delete data.";
        }
        ?>