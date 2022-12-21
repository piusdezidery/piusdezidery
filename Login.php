

<?php

error_reporting(E_ERROR | E_WARNING |E_PARSE);
session_start();
// error_reporting(E_ERROR | E_WARNING |E_PARSE);

if(isset($_POST['login']))


{


//CONNECTION OF THE DATABASE
$conn = mysqli_connect("localhost","root","","carrentaldb");

$Email = $_POST['username'];
$Password =md5($_POST['password']);
//$agent =  "pius";
//$password = "1234";

// if ($Email == $agent ) {
// 		session_start();
// 	$_SESSION['username']=$Email;
// 	echo " <script> location.href='agent.php'</script>";
// }


$select="SELECT * FROM `login` WHERE `username`='$Email' AND `password`='$Password'";
$query=mysqli_query($conn,$select);

if($query){



$num = mysqli_num_rows($query);
if($num>0)
{

if(isset($_POST['checkbox']))
	{
		setcookie('username',$Email, time()+60*60*7);
		setcookie('Password',$Password, time()+60*60*7);
	}




	
	$row=mysqli_fetch_array($query);

	$_SESSION['id']=$row['id'];
	$_SESSION['username']=$row['username'];
	$_SESSION['role']=$row['role'];
	

if($_SESSION['role']=='ADMIN'){
	header("location:company.php");
}

elseif ($_SESSION['role']=='AGENT') {
	header("location:agent.php");
} 


else
{
echo "<script> alert ('Password or username inccorect')</script> ";
echo "<script> location.href='index.php'</script> ";
  
 }
 

}
}
}

?>