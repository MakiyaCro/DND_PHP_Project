<html>
<title>All Character Info</title>
<body>


<p><b>Character Information</b></p>
<p>
<?php
//get a connection for the database
require_once('mysqli_connect.php');

//create a query for the database
$query = "SELECT Character_Name, race, gender, age, lvl, class, alignment, userID, camp_name FROM DND.CHARACTER";

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
	<td align="left"><b>User Name</b></td>
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
		$row['alignment'] . '</td><td align="left">' .
		$row['userID'] . '</td><td align="left">'.
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

?>
</p>





<p>
<b>Back to Table Info</b>
<button onclick="location.href = 'viewtableinfo.php'"> Press Here </button>
</p>

</body>
</html>