<html>
<title>All Equipment Info</title>
<body>
<p><b>Equipment Information</b></p>
<p>
<?php
//get a connection for the database
require_once('mysqli_connect.php');

//create a query for the database
$query = "SELECT Character_Name, Fav_Weapon, GP_Equiv, Health_Equip, Other_Info FROM DND.EQUIPMENT";

//get a response from the database by sending the connection and query
$response = @mysqli_query($dbc, $query);

if($response){
	echo '<table align="left" cellspacing= "5" cellpadding = "8">
	
	<tr><td align="left"><b>Character Name</b></td>
	<td align="left"><b>Favorite Weapon</b></td>
	<td align="left"><b>Gold</b></td>
	<td align="left"><b>Health Equipment</b></td>
	<td align="left"><b>Other Info</b></td></tr>';
	
	//mysqli_fetch_array will return a row of data from the queryy until no further data is available
	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align="left">' .
		$row['Character_Name'] . '</td><td align="left">' .
		$row['Fav_Weapon'] . '</td><td align="left">' .
		$row['GP_Equiv'] . '</td><td align="left">' .
		$row['Health_Equip'] . '</td><td align="left">' .
		$row['Other_Info'] . '</td><td align="left">';
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