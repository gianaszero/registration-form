<?php 
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$year = $_POST['year'];
	$program = $_POST['program'];
	$s_type = $_POST['type'];
	$address =$_POST['address']
?>

Successfully Registered <br />
<strong>Firstname: </strong> <?php echo $fname ?> <br />
<strong>Middlename: </strong> <?php echo $mname ?> <br />
<strong>Lastname: </strong> <?php echo $lname ?> <br />
<strong>Gender: </strong> <?php echo $gender ?> <br />
<strong>Birthday: </strong> <?php echo $month." ".$day." ".$year ?> <br />
<strong>Program: </strong> <?php echo $program ?> <br />
<strong>Student Type: </strong> <?php echo $s_type ?> <br />
<strong>Address: </strong> <?php echo $address ?> <br />