<html>
<head>
<title>Campaign Character Update</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){
	
	$data_missing = array();

	
	if(empty($_POST['Character_Name'])){
		//adds name to array
		$data_missing[] = 'User Name';
	} else {
		//trim whitespace from the name and store the name
		$Character_Name = trim($_POST['Character_Name']);
		require_once('mysqli_connect.php');

		if(empty($_POST['camp_name'])){
		//adds name to array
		$data_missing[] = 'Campaign Name';
		} else {
		//trim whitespace from the name and store the name
			$camp_name = trim($_POST['camp_name']);

			$query1 = "UPDATE DND.CHARACTER SET camp_name = '$camp_name' WHERE Character_Name = '$Character_Name'";

			if(mysqli_query($dbc, $query1)){
				echo "Campaign Updated<br>";
			} else {
				echo "Error updating record: " . mysqli_error($dbc) . "<br>";
			}
		
		}
	

	
		mysqli_close($dbc);
		
	}
	
	if(!empty($data_missing)){
		echo 'You need to enter the following data<bt />';
		foreach($data_missing as $missing){
			echo " $missing<br />";
		}
	}
}
?>

<p>
<b>Back to Main Page</b>
<button onclick="location.href = 'mainpage.php'"> Press Here </button>
</p>

</body>
</html>