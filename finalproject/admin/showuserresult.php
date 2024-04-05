<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC >
<html>
<head>
<title>Show Result</title>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<?php
include("header.php");
include("../database.php");
{

		$sql=mysqli_query($con,"Select * From mst_result");
        	
		echo "<table class='table table-striped'>";
		echo"<h1 class='text-center bg-primary'>User Results</h1>";
		echo "<tr>
		<th class='text-primary'>UserID</th>
				<th class='text-primary'>Test Id</th>
	<th class='text-primary'>Total Marks</th>
	<th class='text-primary'>Delete Data</th></tR>";
	
	while($result=mysqli_fetch_assoc($sql))
	{
	$id=$result['username'];
	
	echo "<tr>";	
	echo "<td>".$result['login']. "</td>";
	echo "<td>".$result['test_id']."</td>";
	echo "<td>".$result['score']."</td>";
	
	echo "<td><a href='userdelete.php?username=$id'><span class='glyphicon glyphicon-trash'></span></a></td>";
	echo "</tr>";
	echo"</div>";
	}
	echo "</table>";
		
}

?>