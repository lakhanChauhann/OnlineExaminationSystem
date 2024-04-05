<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Adminstrative Area</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>

<body>
<?php
include("header1.php");
include("../database.php");
extract($_POST);
if(isset($submit))
{
	$rs=mysqli_query($con,"select * from mst_admin where loginid='$loginid' and pass='$pass'",$cn) or die(mysqli_error());
	if(mysqli_num_rows($rs)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<br>
		<a href='index.php'>Click here to login again </a>
		<div>";
	//exit;
		echo "<script>window.location='index.php'</script>";		
	}
	else
	{
	echo "<script>window.location='login.php'</script>";			
	$_SESSION['alogin']="true";
	}
}
else if(!isset($_SESSION['alogin']))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}


echo "<h1 class= 'text-center' >Administrative Area</h1>";
echo '<table width="28%"  border="0" align="center">

  <tr>
    
    <td valign="bottom"> <a href="testview.php" class="style4"><h2>Add Subject<h2> </a></td>
  </tr>
  <tr>
    
    <td valign="bottom"> <a href="questiondelete.php" class="style4"><h2>Add Questions<h2> </a></td>
  </tr>
  <tr>
    
    <td valign="bottom"> <a href="showuser.php" class="style4"><h2>View User<h2> </a></td>
  </tr>
  <tr>
    
    <td valign="bottom"> <a href="showuserresult.php" class="style4"><h2>View User Result<h2> </a></td>
  </tr>
</table>';





			
		


?>



</body>
</html>
