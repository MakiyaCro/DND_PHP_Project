<html>
<title>All Campaign Info</title>
<body>
<p><b>Campaign Information</b></p>
<p>
<?php
//get a connection for the database
require_once('mysqli_connect.php');


//create a query for the database
$query = "SELECT Camp_Name, GM_Name, Number_Sessions FROM DND.CAMPAIGN";

//get a response from the database by sending the connection and query
$response = @mysqli_query($dbc, $query);

if($response){
	echo '<table align="left" cellspacing= "5" cellpadding = "8">
	
	<tr><td align="left"><b>Campaign Name</b></td>
	<td align="left"><b>Game Master</b></td>
	<td align="left"><b>Number of Sessions</b></td></tr>';
	
	//mysqli_fetch_array will return a row of data from the queryy until no further data is available
	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align="left">' .
		$row['Camp_Name'] . '</td><td align="left">' .
		$row['GM_Name'] . '</td><td align="left">' .
		$row['Number_Sessions'] . '</td><td align="left">';
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