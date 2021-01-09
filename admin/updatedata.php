<?php
	include ('../dbcon.php');
		$rollno = $_POST['rollno'];
		$name = $_POST['name'];
		$city = $_POST['city'];
		$pcont = $_POST['pcont'];
		$std = $_POST['std'];
		$id = $_POST['sid'];
		$image = $_FILES['simg']['name'];
		$temp = $_FILES['simg']['tmp_name'];
		move_uploaded_file($temp, "../dataimg/$image");
		$qry = "UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcont', `standerd` = '$std', `image` = '$image' WHERE `id` = '$id'";
		$run = mysqli_query($con, $qry);
		if ($run!= 0) :
			?>
			<script type="text/javascript">
				alert("Data Updated Successfully.");
				window.open('updateform.php?sid=<?php echo $id; ?>', '_self');
			</script>
			<?php
		endif;
?>