<html>
<head>
<title>New Campaign</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){
	
	$data_missing = array();
	
	if(empty($_POST['Camp_Name'])){
		//adds name to array
		$data_missing[] = 'Campaign Name';
	} else {
		//trim whitespace from the name and store the name
		$Camp_Name = trim($_POST['Camp_Name']);
	

	if(empty($_POST['GM_Name'])){
		//adds name to array
		$data_missing[] = 'GM Name';
	} else {
		//trim whitespace from the name and store the name
		$GM_Name = trim($_POST['GM_Name']);
	}
	

	if(empty($_POST['Number_Sessions'])){
		//adds name to array
		$data_missing[] = 'Number of Sessions';
	} else {
		//trim whitespace from the name and store the name
		$Number_Sessions = trim($_POST['Number_Sessions']);
	}
	

	}

	if(empty($data_missing)){
		
		require_once('mysqli_connect.php');
		$query = "INSERT INTO DND.CAMPAIGN (Camp_Name, GM_Name, Number_Sessions)
		VALUES(?,?,?)";
		
		$stmt = mysqli_prepare($dbc, $query);
		
		mysqli_stmt_bind_param($stmt, "ssi", $Camp_Name, $GM_Name, $Number_Sessions);
		
		mysqli_stmt_execute($stmt);
		
		$affected_rows = mysqli_stmt_affected_rows($stmt);
		
		if($affected_rows == 1){
			echo 'Campaign Entered';
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

<form action ="http://localhost/campaignadded.php" method="post">

<b>Add new Campaign</b>

<p>Campaign Name:
<input type="char(50)" name="Camp_Name" size="50" value="" />
</p>

<p>GM Name:
<input type="text" name="GM_Name" size="20" value="" />
</p>

<p>Number of Sessions:
<input type="integer" name="Number_Sessions" size="3" value="" />
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