<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>Select Semester</title>
	<link href="../quiz.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link href="quiz.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"/> -->
</head>

<body>
	<?php
	include("header.php");
	include("../database.php"); {
		$sql = mysqli_query($con, "select * from mst_subject");

		echo "<table class='table table-striped'>";
		echo "<tr><th><a class='btn btn-danger' href='subadd.php'>Add Semester</a></th></tr>";
		echo "<tr><th class='text-primary'>ID</th><th class='text-primary'>name</th>
	<th class='text-primary'>Update</th>
	<th class='text-primary'>Delete</th></tR>";

		while ($result = mysqli_fetch_assoc($sql)) {
			$id = $result['sub_id'];

			echo "<tr>";
			echo "<td>" . $result['sub_id'] . "</td>";
			echo "<td>" . $result['sub_name'] . "</td>";
			echo "<td><a href='#viewsub.php?sub_id=$id'><span class='glyphicon glyphicon-edit'></span></a></td>";
			echo "<td><a href='#viewsub.php?sub_id=$id'><span class='glyphicon glyphicon-trash'></span></a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	?>
	<!-- Update Subject -->
	<?php
	include("../database.php");
	// 
	//  $id=$_GET['sub_id'];
	$q = mysqli_query($con, "select * from mst_subject where sub_id='$id'");
	$res = mysqli_fetch_array($q);
	$id = $res['sub_id'];
	$sub_name = $_POST['subjectname'];

	if (isset($_POST['submit'])) {

		// $query="update mst_subject SET sub_name='$subname' where sub_id='$id'";	
		$query = "UPDATE mst_subject SET sub_name='$sub_name' WHERE sub_id='$id'";
		mysqli_query($con, $query);
		echo "records updated";
	}

	?>
	<div id="Update">
		<h1 class='text-center bg-primary'>Update Semester</h1>
		<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
			<title>Add Semester</title>
			<form name="form1" method="post" onSubmit="return check();">
				<table class="table table-striped">
					<tr>
						<td width="45%" height="32">
							<div align="center"><strong>Enter Semester Name </strong></div>
						</td>
						<td width="2%" height="5">
						<td width="53%" height="32">
							<input class="form-control" value="<?php echo $res['sub_name']; ?>" name="subjectname" placeholder="enter semester" type="text" id="subname">
					<tr>
						<td height="26"> </td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td height="26"></td>
						<td>&nbsp;</td>
						<td><button type="submit" name="submit">Submit</button></td>
					</tr>
				</table>
			</form>
		</div>
		<p>&nbsp; </p>
	</div>
	<!-- For Delete Sub -->
	<div id="Delete">
		<?php
		include("../database.php");
		$id = $_GET['sub_id'];
		
		$sql = mysqli_query($con, " DELETE FROM mst_subject WHERE sub_id='$id' ");
		?>
	</div>

</body>

</html>
</body>

</html>