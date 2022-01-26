<html>
<head>
<title>New User</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){
	
	$data_missing = array();
	
	if(empty($_POST['User_Name'])){
		//adds name to array
		$data_missing[] = 'User Name';
	} else {
		//trim whitespace from the name and store the name
		$User_Name = trim($_POST['User_Name']);
	

	if(empty($_POST['Phone_Number'])){
		//adds name to array
		$data_missing[] = 'Phone Number';
	} else {
		//trim whitespace from the name and store the name
		$Phone_Number = trim($_POST['Phone_Number']);
	}
	

	if(empty($_POST['email'])){
		//adds name to array
		$data_missing[] = 'Email';
	} else {
		//trim whitespace from the name and store the name
		$email = trim($_POST['email']);
	}
	

	}
	
	if(empty($data_missing)){
		
		require_once('mysqli_connect.php');
		$query = "INSERT INTO DND.USER (User_Name, Phone_Number, email)
		VALUES(?,?,?)";
		
		$stmt = mysqli_prepare($dbc, $query);
		
		mysqli_stmt_bind_param($stmt, "sss", $User_Name, $Phone_Number, $email);
		
		mysqli_stmt_execute($stmt);
		
		$affected_rows = mysqli_stmt_affected_rows($stmt);
		
		if($affected_rows == 1){
			echo 'User Entered';
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
		} else {
			echo 'Error Occured<br />';
			echo mysqli_error();
			
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
		}
	} else {
		echo 'You need to enter the following data<bt />';
		foreach($data_missing as $missing){
			echo " $missing<br />";
		}
	}
}
?>

<form action ="http://localhost/useradded.php" method="post">

<b>Add new User</b>

<p>User Name:
<input type="char(50)" name="User_Name" size="50" value="" />
</p>

<p>Phone Number ###-###-####:
<input type="char(12)" name="Phone_Number" size="12" value="" />
</p>

<p>Email:
<input type="text" name="email" size="70" value="" />
</p>

<p>
<input type="submit" name="submit" value="Send" />
</p>

</form>

<p>
<b>Back to Main Page</b>
<button onclick="location.href = 'mainpage.php'"> Press Here </button>
</p>

</body>
</html>