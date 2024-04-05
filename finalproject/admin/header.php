

<style type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>

</style>
<table>

</table>
  <Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	
<?php
	if(isset($_SESSION['alogin']))
	{
	
	 echo "<h4 class='text-success text-center btn btn-lite'>
	 <div align=\"left\"><strong>
	 <a href=\"showuserresult.php\"> User Reults</a></strong>&emsp;&emsp;
		<a href=\"testview.php\"> view Subject</a>&emsp;&emsp;  
	 <a href=\"questiondelete.php\">View Question</a>&emsp;&emsp;
	 <a href=\"showuser.php\"> view user</a></strong>&emsp;&emsp;</strong>
	 
	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	 <strong><a href=\"login.php\">Home|</a>&emsp;
	 <a href=\"signout.php\">Signout</a></strong>&emsp;&emsp;
	 </div></h4>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
		</td>
	
  </tr>
  
</table>
