<html>
<head>
<title>New Equipment</title>
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
	
	if(empty($_POST['Fav_Weapon'])){
		//adds name to array
		$data_missing[] = 'Favorite Weapon';
	} else {
		//trim whitespace from the name and store the name
		$Fav_Weapon = trim($_POST['Fav_Weapon']);
	}
	
	if(empty($_POST['GP_Equiv'])){
		//adds name to array
		$data_missing[] = 'Gold Equivalent';
	} else {
		//trim whitespace from the name and store the name
		$GP_Equiv = trim($_POST['GP_Equiv']);
	}
	
	if(empty($_POST['Health_Equip'])){
		//adds name to array
		$data_missing[] = 'Health Equipment';
	} else {
		//trim whitespace from the name and store the name
		$Health_Equip = trim($_POST['Health_Equip']);
	}
	
	if(empty($_POST['Other_Info'])){
		//adds name to array
		$data_missing[] = 'Other Information';
	} else {
		//trim whitespace from the name and store the name
		$Other_Info = trim($_POST['Other_Info']);
	}
	
	
	if(empty($data_missing)){
		
		require_once('mysqli_connect.php');
		$query = "INSERT INTO DND.EQUIPMENT (Character_Name, Fav_Weapon, 
		GP_Equiv, Health_Equip, Other_Info) VALUES(?,?,?,?,?)";
		
		$stmt = mysqli_prepare($dbc, $query);
		
		mysqli_stmt_bind_param($stmt, "ssiss", $Character_Name, $Fav_Weapon, $GP_Equiv,
		$Health_Equip, $Other_Info);
		
		mysqli_stmt_execute($stmt);
		
		$affected_rows = mysqli_stmt_affected_rows($stmt);
		
		if($affected_rows == 1){
			echo 'Equipment Entered';
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

<p>
<b>Back to Main Page</b>
<button onclick="location.href = 'mainpage.php'"> Press Here </button>
</p>

</body>
</html>