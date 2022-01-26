<html>
<title>All Boss Info</title>
<body>
<p><b>Boss Information</b></p>
<p>
<?php
//get a connection for the database
require_once('mysqli_connect.php');

//create a query for the database
$query = "SELECT Boss_Name, Lvl, info, Camp_Name FROM DND.BOSS";

//get a response from the database by sending the connection and query
$response = @mysqli_query($dbc, $query);

if($response){
	echo '<table align="left" cellspacing= "5" cellpadding = "8">
	
	<tr><td align="left"><b>Boss Name</b></td>
	<td align="left"><b>Level</b></td>
	<td align="left"><b>Info</b></td>
	<td align="left"><b>Campaign Name</b></td></tr>';
	
	//mysqli_fetch_array will return a row of data from the queryy until no further data is available
	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align="left">' .
		$row['Boss_Name'] . '</td><td align="left">' .
		$row['Lvl'] . '</td><td align="left">' .
		$row['info'] . '</td><td align="left">' .
		$row['Camp_Name'] . '</td><td align="left">';
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