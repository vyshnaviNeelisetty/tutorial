<?php

 session_start();
 if(isset($_session['mail']))
 {
	 header("location:tutorial.php");
 }
 
 include 'connection.php';
 $sql="insert into register(fid ,lname,mail,password,radio) values('$_POST[fid]','$_POST[lname]','$_POST[mail]','$_POST[password]','$_POST[radio]')";

 if(mysqli_query($con,$sql))
{?>
   <script>alert("Congrats!! Registered Successfully");</script>
   <?php
}

mysqli_close($con);
?>

	
	  