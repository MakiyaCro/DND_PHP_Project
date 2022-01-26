<html>
<head>
<title>New Character</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){
	
	$data_missing = array();
	
	if(empty($_POST['Character_Name'])){
		//adds name to array
		$data_missing[] = 'Character Name';
	} else {
		//trim whitespace from the name and store the name
		$Character_Name = trim($_POST['Character_Name']);
	}
	
	if(empty($_POST['race'])){
		//adds name to array
		$data_missing[] = 'Race';
	} else {
		//trim whitespace from the name and store the name
		$race = trim($_POST['race']);
	}
	
	if(empty($_POST['gender'])){
		//adds name to array
		$data_missing[] = 'Gender';
	} else {
		//trim whitespace from the name and store the name
		$gender = trim($_POST['gender']);
	}
	
	if(empty($_POST['age'])){
		//adds name to array
		$data_missing[] = 'Age';
	} else {
		//trim whitespace from the name and store the name
		$age = trim($_POST['age']);
	}
	
	if(empty($_POST['lvl'])){
		//adds name to array
		$data_missing[] = 'Level';
	} else {
		//trim whitespace from the name and store the name
		$lvl = trim($_POST['lvl']);
	}
	
	if(empty($_POST['class'])){
		//adds name to array
		$data_missing[] = 'Class';
	} else {
		//trim whitespace from the name and store the name
		$class = trim($_POST['class']);
	}
	
	if(empty($_POST['alignment'])){
		//adds name to array
		$data_missing[] = 'Alignment';
	} else {
		//trim whitespace from the name and store the name
		$alignment = trim($_POST['alignment']);
	}
	
	if(empty($_POST['userID'])){
		//adds name to array
		$data_missing[] = 'User Name';
	} else {
		//trim whitespace from the name and store the name
		$userID = trim($_POST['userID']);
	}

	if(empty($_POST['camp_name'])){
		//adds name to array
		$data_missing[] = 'Campaign Name';
	} else {
		//trim whitespace from the name and store the name
		$camp_name = trim($_POST['camp_name']);
	}
	
	if(empty($data_missing)){
		
		require_once('mysqli_connect.php');
		$query = "INSERT INTO DND.CHARACTER (Character_Name, race, 
		gender, age, lvl, class, alignment, userID, camp_name) VALUES(?,?,?,?,?,?,?,?,?)";
		
		$stmt = mysqli_prepare($dbc, $query);
		
		mysqli_stmt_bind_param($stmt, "sssiissss", $Character_Name, $race, $gender,
		$age, $lvl, $class, $alignment, $userID, $camp_name);
		
		mysqli_stmt_execute($stmt);
		
		$affected_rows = mysqli_stmt_affected_rows($stmt);
		
		if($affected_rows == 1){
			echo 'Character Entered';
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

<form action ="http://localhost/characteradded.php" method="post">

<b>Add new Character</b>

<p>Character Name:
<input type="char(50)" name="Character_Name" size="50" value="" />
</p>

<p>Race:
<input type="text" name="race" size="30" value="" />
</p>

<p>Gender:
<input type="text" name="gender" size="20" value="" />
</p>

<p>Age:
<input type="integer" name="age" size="3" value="" />
</p>

<p>Level:
<input type="integer" name="lvl" size="2" value="" />
</p>

<p>Class:
<input type="text" name="class" size="30" value="" />
</p>

<p>Alignment:
<input type="text" name="alignment" size="30" value="" />
</p>

<p>User Name:
<input type="char(50)" name="userID" size="50" value="" />
</p>

<p>Campaign Name:
<input type="char(50)" name="camp_name" size="50" value="" />
</p>

<p>
<input type="submit" name="submit" value="Send" />
</p>
</form>

</form>
<p>
<b>Back to Main Page</b>
<button onclick="location.href = 'mainpage.php'"> Press Here </button>
</p>

</body>
</html>



	
	
	
	
	