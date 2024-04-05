<style type="text/css">


</style>
    <td width="5%">
     <img border="0" src="h.png" width="100%" height="60%" align="left"></td>
  </tr>
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
	 echo "<div align=\"right\"><strong><a href=\"login.php\"><h4> Home</a>|<a href=\"signout.php\">Signout</h4></a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
		</td>
	
  </tr>
  
</table>
