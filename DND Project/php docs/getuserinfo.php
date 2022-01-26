<html>
<title>All User Info</title>
<body>
<p><b>User Information</b></p>
<p>
<?php
//get a connection for the database
require_once('mysqli_connect.php');

//create a query for the database
$query = "SELECT User_Name, Phone_Number, email FROM DND.USER";

//get a response from the database by sending the connection and query
$response = @mysqli_query($dbc, $query);

if($response){
	echo '<table align="left" cellspacing= "5" cellpadding = "8">
	
	<tr><td align="left"><b>User Name</b></td>
	<td align="left"><b>Phone Number</b></td>
	<td align="left"><b>Email</b></td></tr>';
	
	//mysqli_fetch_array will return a row of data from the queryy until no further data is available
	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align="left">' .
		$row['User_Name'] . '</td><td align="left">' .
		$row['Phone_Number'] . '</td><td align="left">' .
		$row['email'] . '</td><td align="left">';
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