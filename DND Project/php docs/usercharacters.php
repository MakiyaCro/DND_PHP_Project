<html>
<head>
<title>Character Look Up</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
	
	$data_missing = array();
	
	if(empty($_POST['User_Name'])){
		//echo $_POST['User_Name'];
		//adds name to array
		$data_missing[] = 'User Name';
	} else {
		//trim whitespace from the name and store the name
		//echo $_POST['User_Name'];
		$User_Name = trim($_POST['User_Name']);
	}
	
	
	if(empty($data_missing)){
		
		require_once('mysqli_connect.php');

		//create a query for the database
		$query = "SELECT Character_Name, race, gender, age, lvl, class, alignment, camp_name FROM DND.CHARACTER WHERE '$User_Name' = userID";

		//get a response from the database by sending the connection and query
		$response = @mysqli_query($dbc, $query);

		if($response){
			echo '<table align="left" cellspacing= "5" cellpadding = "8">
	
			<tr><td align="left"><b>Character Name</b></td>
			<td align="left"><b>Race</b></td>
			<td align="left"><b>Gender</b></td>
			<td align="left"><b>Age</b></td>
			<td align="left"><b>Level</b></td>
			<td align="left"><b>Class</b></td>
			<td align="left"><b>Alignment</b></td>
			<td align="left"><b>Campaign Name</b></td></tr>';
	
			//mysqli_fetch_array will return a row of data from the queryy until no further data is available
			while($row = mysqli_fetch_array($response)){
				echo '<tr><td align="left">' .
				$row['Character_Name'] . '</td><td align="left">' .
				$row['race'] . '</td><td align="left">' .
				$row['gender'] . '</td><td align="left">' .
				$row['age'] . '</td><td align="left">' .
				$row['lvl'] . '</td><td align="left">' .
				$row['class'] . '</td><td align="left">' .
				$row['alignment'] . '</td><td align="left">'.
				$row['camp_name'] . '</td><td align="left">';
		
				echo '</tr>';
			}
	
			echo '</table>';
		} else {
			echo "Couldn't issue database query<br />";
			echo mysqli_error($dbc);
		}
		//close connection to the database
		mysqli_close($dbc);
	} else {
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