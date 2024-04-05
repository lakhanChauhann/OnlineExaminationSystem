<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New user signup </title>
<link rel="stylesheet" href="css/register.css"/>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-success">
<?php
include("header.php");
?>
 <div class="container1" id="container1">
	<div class="form register">
  <form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
            <h1>Welcome to <br>Online Examination System</h1>
            <h2>Create Account</h2>
            <input type="text" placeholder="Full Name" name="name" required/>
            <input type="text" placeholder="Create Login ID" name="lid" required/>
			<input type="email" placeholder="Email" name="email" required/>
			<input type="password" placeholder="Password" name="pass" required/>
			<input type="password" placeholder="Confirm Password" name="cpass" required/>
		
            <button type="submit"name="submit" value="signup">Register</button>
            <a href="index.php"style="cursor:pointer">Have you already registered ? Click Here</a>
		</form>
	</div>
	<div class="overlay">
                <img src="sspi.png">
                <h3>Shri Shivaji Polytechnic Institute,Parbhani</h3> 
	</div>
</div>
</body>
</html>
