<?php  
	session_start();
                if(isset($_SESSION['uid'])) :
                	
                else :
                	header('location: ../login.php');
                endif;
?>
<?php  
	include ('header.php');
	include ('titlehead.php');
?>

<table align="center" style="margin-top: 10px;">
	<form action="deletestudent.php" method="POST">
	
			<th>Enter Standerd</th>
			<td><input type="number" name="std" placeholder="Enter Standerd" required></td>
		
			<th>Enter Student Name</th>
			<td><input type="text" name="sname" placeholder="Enter Student Name" required></td>

			<td colspan="2" align="center"><input type="submit" name="submit" value="Search"></td>
	</form>
</table>

<table border="1" width="80%" align="center" style="margin-top: 10px; border-color: #000; border-collapse: collapse;">
	<tr style="background-color: #000; color: #fff;">
	<th>No</th>
	<th>Image</th>
	<th>Name</th>
	<th>Rollno</th>
	<th>Edit</th>
	</tr>

<?php
	if (isset($_POST['submit'])) :
		include ('../dbcon.php');
		$standerd = $_POST['std'];
		$name = $_POST['sname'];
		$sql = "SELECT * FROM `student` WHERE `standerd` = '$standerd' AND `name` LIKE '%$name%'";
		$run = mysqli_query($con, $sql);

		if (mysqli_num_rows($run)<1) :
			echo "<tr><td colspan='5'>No Records Found</td></tr>";
		else :
			$count = 0;
			while ($data = mysqli_fetch_assoc($run)) :
				$count++;
			?>
				<tr align="center">
					<td><?php echo $count; ?></td>
					<td><img src="../dataimg/<?php echo $data['image'] ?>" style="max-width: 50px;"></td>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['rollno']; ?></td>
					<td><a href="deleteform.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
				</tr>		
			<?php
			endwhile;
		endif;
	endif;

?>
</table>