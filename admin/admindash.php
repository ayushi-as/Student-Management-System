<?php  
	session_start();
                if(isset($_SESSION['uid'])) :
                	
                else :
                	header('location: ../login.php');
                endif;
?>

<?php
	include('header.php');
?>
<div align="center" class="header">
	<h4><a href="../index.php" style="float: left; margin-left: 30px; color: #fff; font-size: 20px;">Home</a></h4>
	<h4><a href="logout.php" style="float: right; margin-right: 30px; color: #fff; font-size: 20px;">Logout</a></h4>
	<h1>Welcome to Student Dashboard</h1>
</div>

<div class="dashboard" align="center">
	<table border="1">
		<tr>
			<td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td>
		</tr>
		<tr>
			<td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
		</tr>
		<tr>
			<td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td>
		</tr>
	</table>
</div>

</body>
</html>