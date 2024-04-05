<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}

table{
  margin-left:2%;
}

</style>

 
  </tr>
  </tr>
</table>
  <table width="60%">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 echo 
'<nav class="navbar navbar-expand-lg bg-light">
   <div class="fluid" align="right">
     <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
       <div class="navbar-nav">
         <a class="nav-link active" aria-current="page" href="index.php"><h4>Home|</a>
         <a class="nav-link" href="signout.php">Signout</h4></a>
        </div>
      </div>
    </div>
 </nav>';
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
	
  </tr>
  
</table>
