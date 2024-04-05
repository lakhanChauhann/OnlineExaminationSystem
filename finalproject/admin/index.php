<?php
session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <title> </title>
<link rel="stylesheet" href="../css/signinasadmin.css">
<form name="form1" method="post" action="login.php">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">


</head>

<body>
<?php
include("header.php");
?>
<form name="form1" method="post" action="login.php">
<div class="container2" id="container2">
	<div class="form signinasadmin">
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST">
            <h1>Welcome to <br>Online Examination System</h1>
			<h2>Admin Login</h2>
			<input type="text" placeholder="Username" name="loginid"required />
			<input type="password" placeholder="Password" name="pass"required/>
            <button type="submit" name="submit">Sign In</button><br>
			<span><a href="/examsystem/index.php"> Student</a>
		</form>
	</div>
	<div class="overlay">
                <img src="/examsystem/sspi.png"><br>
				<h3>Shri Shivaji Polytechnic Institute,Parbhani</h3>
	</div>
</div>

</form>

</body>
</html>
