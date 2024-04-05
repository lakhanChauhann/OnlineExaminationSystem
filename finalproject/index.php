<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>

<link rel="stylesheet" href="css/index.css"/> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");

include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($con,"select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['login']=$loginid;
	}
}
if (isset($_SESSION['login']))
{
echo '<img src="sspi.png" width="100" hieght="100" align="center">' ;
echo "<h1>Online Examination System</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4"><h2>Select Semester <h2></a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="50" height="50" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4"><h2>Show Result<h2> </a></td>
  </tr>
</table>';


   
		exit;
		

}


?>

</div>

<div class="container" id="container">
	<div class="form signin">
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST">
            <h1>Welcome to <br>Online Examination System</h1>
			<h2>Sign in</h2>
			<input type="text" placeholder="Login ID" name="loginid"required/>
			<input type="password" placeholder="Password" name="pass"required/>
            <button type="submit"name="submit">Sign In</button>
			
            <a href="signup.php">New User, Register Here</a>
			<span><a href="admin/index.php"> Admin </a> 
		</form>
	</div>
	<div class="overlay">
                <img src="sspi.png"><br>
                <h3>Shri Shivaji Polytechnic Institute, Parbhani</h3>
	</div>
</div>

</body>
</html>
