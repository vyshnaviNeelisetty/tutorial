<?php
session_start();
if(isset($_session['mail'])!="")
{
header("location:tutorial.php");
}
 $mail=$_POST['mail'];
$password=$_POST['password'];

$sql="select * from register where mail='$mail' and password='$password'";
$con=mysqli_connect("localhost","root","","tutorial");
  if(mysqli_query($con,$sql))
  {
	  if(mysqli_affected_rows($con)!=0)
	  {
	  ?>
	  <script>alert("logged-in successfully");</script>
	   	<?php 
				$_SESSION['mail']=$mail;
	header("location:tutorial.php");
	//echo $_SESSION['mail'];
       }

    else
    {
	?>
	    <script>
		window.location.href="log.php";
	     alert("Mail/Password are incorrect");
		 </script>
		<?php
	}

  }
mysqli_close($con);
?>

	
	  