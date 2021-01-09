<?php  
	session_start();
                if(isset($_SESSION['uid'])) :
                	
                else :
                	header('location: ../login.php');
                endif;
?>

<?php
	include('header.php');
	include('titlehead.php');	
?>

<form action="addstudent.php" method="POST" enctype="multipart/form-data">
	<table border="2" class="tabledash" align="center">
		<tr>
			<th>Roll No</th>
			<td><input type="text" name="rollno" placeholder="Enter Roll No" required></td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type="text" name="name" placeholder="Enter Full Name" required></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city" placeholder="Enter City" required></td>
		</tr>
		<tr>
			<th>Parents Contact no</th>
			<td><input type="text" name="pcont" required></td>
		</tr>
		<tr>
			<th>Standerd</th>
			<td><input type="number" name="std" required></td>
		</tr>
		<tr>
			<th>Image</th>
			<td><input type="file" name="simg" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
		</tr>
		
	</table>
</form>
</body>
</html>

<?php
	if (isset($_POST['submit'])) :
		include ('../dbcon.php');
		$rollno = $_POST['rollno'];
		$name = $_POST['name'];
		$city = $_POST['city'];
		$pcont = $_POST['pcont'];
		$std = $_POST['std'];
		$image = $_FILES['simg']['name'];
		$temp = $_FILES['simg']['tmp_name'];
		move_uploaded_file($temp, "../dataimg/$image");
		$qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standerd`, `image`) VALUES ('$rollno', '$name', '$city', '$pcont', '$std', '$image')";
		$run = mysqli_query($con, $qry);
		if ($run!= 0) :
			?>  
			<script type="text/javascript">
				alert("Data Inserted Successfully.");
			</script>
			<?php
		endif;

	endif;
	
?>