<?php 
	$months = ['January', 'February', 'March', 'April','May', 'June', 'July', 'August','September', 'October',
				 'November', 'December'];
 	$courses = ['Bachelor of Science in Information Systems','Bachelor of Science in Social Works',
 				 'Bachelor of Science in Accountancy','Bachelor of Science in Accounting Technology',
 				 'Associate in Computer Technology', 'Bachelor of Arts in Broadcasting','Office Management',
 				 'Mass Communication Technology', 'International Cookery']
 ?>

<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="POST" action="register.php">
		<div id="wrap">			
			<table border="1" cellpadding="10">
				<caption>Student Registration Form</caption>
				<tr>
					<td>First name</td>
					<td>Middle name</td>
					<td>Last name</td>
				</tr>
				<tr>
					<td><input type="text" name="firstname" placeholder = "eg. Juan" /></td>
					<td><input type="text" name="middlename" placeholder = "eg. Santos"/></td>
					<td><input type="text" name="lastname" placeholder = "eg. Dela Cruz"/></td>
				</tr>
				<tr>
					<td colspan="3">
						Gender: <input type="radio" value="male" name="gender" /> Male
								<input type="radio" value="female" name="gender" /> Female
					</td>
				</tr>
				<tr>
					<td colspan="3">
						Birthday:
						<select name="month">
							<option>Month</option>
							<?php foreach( $months as $month ): ?>
							<option value = "<?= $month; ?>"><?= $month; ?></option>
							<?php endforeach; ?>
						</select>
						
						<select name ="day">
							<option>Day</option>
							<?php for( $day = 1; $day <= 31; $day++ ): ?>
							<option value = "<?= $day; ?>"><?= $day; ?></option>
							<?php endfor; ?>
						</select>

						<select name ="year">
							<option>Year</option>
						<?php for( $year = date('Y'); $year >= 1985; $year-- ): ?>
							<option value = "<?= $year; ?>"><?= $year; ?></option>
						<?php endfor; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						Program: 
						<select name = "program">
							<option>Courses</option>
							<?php foreach( $courses as $course ): ?>
							<option value ="<?= $course; ?>"><?= $course; ?></option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="3">Student Type</td>
				</tr>
				<tr>
					<td colspan="3">
						<input type="radio" name="type" /> Full Scholar <br />
						<input type="radio" name="type" /> Partial <br />
						<input type="radio" name="type" /> Payee <br />
					</td>
				</tr>
				<tr>
					<td colspan="3">Address:</td>
				</tr>
				<tr>
					<td colspan="3"><textarea name = "address" ></textarea></td>
				</tr>
			</table>
			<input type="submit" value="SUBMIT" />
		</div>
	</form>
</body>
</html>