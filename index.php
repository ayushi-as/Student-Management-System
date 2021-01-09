<?php  
	session_start();
                if(isset($_SESSION['uid'])) :
                	
                else :
                	header('location: login.php');
                endif;
?>

<?php
	include('admin/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="css/style.css">
</head> 
<body>
    <div class="header" align="center">
        <h4><a href="admin/admindash.php" style="float: left; margin-left: 30px; color: #fff; font-size: 20px;">Dashboard</a></h4>
        <h4><a href="admin/logout.php" style="float: right; margin-right: 30px; color: #fff; font-size: 20px;">Admin logout</a></h4>
        <h3 style="margin-left:20px; float:left;"></h3>
        <h3 style="margin-right:20px; float:right"></h3>
        <h1 align="center">Welcome to Student Management System</h1>
    </div>
    <form action="index.php" method="post" style="margin-top: 10px;">
        <table style="width:30%; border-collapse: collapse;" align="center" border="1">
            <tr>
                <td colspan="2" align="center">Student Information</td>
            </tr>
            <tr>
                <td align="left">Choose Standerd</td>
                <td>
                    <select name="std">
                        <option value="1">1st</option>
                        <option value="2">2nd</option>
                        <option value="3">3rd</option>
                        <option value="4">4th</option>
                        <option value="5">5th</option>
                        <option value="6">6th</option>
                        <option value="7">7th</option>
                        <option value="8">8th</option>
                        <option value="9">9th</option>
                        <option value="10">10th</option>
                        <option value="11">11th</option>
                        <option value="12">12th</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="left">Enter Rollno</td>
                <td><input type="text" name="rollno" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
 if (isset($_POST['submit'])) :
     $std = $_POST['std'];
     $rollno = $_POST['rollno'];
     include ('dbcon.php');
     include ('function.php');
     showdetails($std, $rollno);
 endif;
?>