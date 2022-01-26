<html>
<head>
<title>New Boss</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){
	
	$data_missing = array();
	
	if(empty($_POST['Boss_Name'])){
		//adds name to array
		$data_missing[] = 'Boss Name';
	} else {
		//trim whitespace from the name and store the name
		$Boss_Name = trim($_POST['Boss_Name']);
	
    }
	if(empty($_POST['Lvl'])){
		//adds name to array
		$data_missing[] = 'Boss level (CR or ECL)';
	} else {
		//trim whitespace from the name and store the name
		$Lvl = trim($_POST['Lvl']);
	}
	

	if(empty($_POST['info'])){
		//adds name to array
		$data_missing[] = 'Boss information';
	} else {
		//trim whitespace from the name and store the name
		$info = trim($_POST['info']);
	}
	
	if(empty($_POST['Camp_Name'])){
		//adds name to array
		$data_missing[] = 'Name of campaign';
	} else {
		//trim whitespace from the name and store the name
		$Camp_Name = trim($_POST['Camp_Name']);
    }

	if(empty($data_missing)){
		
		require_once('mysqli_connect.php');
		$query = "INSERT INTO DND.BOSS (Boss_Name, Lvl, info, 
        Camp_Name) VALUES(?,?,?,?)";
		
		$stmt = mysqli_prepare($dbc, $query);
		
        mysqli_stmt_bind_param($stmt, "siss", $Boss_Name, $Lvl, $info, 
        $Camp_Name);
		
		mysqli_stmt_execute($stmt);
		
		$affected_rows = mysqli_stmt_affected_rows($stmt);
		
		if($affected_rows == 1){
			echo 'Boss Entered';
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

<form action ="http://localhost/bossadded.php" method="post">

<b>Add new Boss</b>

<p>Boss Name:
<input type="char(50)" name="Boss_Name" size="50" value="" />
</p>

<p>Boss level (CR or ECL):
<input type="integer" name="Lvl" size="3" value="" />
</p>

<p>Boss info:
<input type="char(250)" name="info" size="250" value="" />
</p>

<p>Campaign Name:
<input type="char(50)" name="Camp_Name" size="50" value="" />
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