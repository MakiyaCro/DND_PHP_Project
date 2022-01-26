<html>
<head>
<title>Equipment Update</title>
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

		if(empty($_POST['Fav_Weapon'])){
		//adds name to array
		//$data_missing[] = 'Phone Number';
		} else {
		//trim whitespace from the name and store the name
			$Fav_Weapon = trim($_POST['Fav_Weapon']);

			$query1 = "UPDATE DND.EQUIPMENT SET Fav_Weapon = '$Fav_Weapon' WHERE Character_Name = '$Character_Name'";

			if(mysqli_query($dbc, $query1)){
				echo "Favorite Weapon Updated<br>";
			} else {
				echo "Error updating record: " . mysqli_error($dbc) . "<br>";
			}
		
		}
	

		if(empty($_POST['GP_Equiv'])){
		//adds name to array
		//$data_missing[] = 'Email';
		} else {
		//trim whitespace from the name and store the name
			$GP_Equiv = trim($_POST['GP_Equiv']);

			$query2 = "UPDATE DND.EQUIPMENT SET GP_Equiv = '$GP_Equiv' WHERE Character_Name = '$Character_Name'";

			if(mysqli_query($dbc, $query2)){
				echo "Gold Equivalent Updated<br>";
			} else {
				echo "Error updating record: " . mysqli_error($dbc) . "<br>";
			}
		}


		if(empty($_POST['Health_Equip'])){
		//adds name to array
		//$data_missing[] = 'Email';
		} else {
		//trim whitespace from the name and store the name
			$Health_Equip = trim($_POST['Health_Equip']);

			$query3 = "UPDATE DND.EQUIPMENT SET Health_Equip = '$Health_Equip' WHERE Character_Name = '$Character_Name'";

			if(mysqli_query($dbc, $query3)){
				echo "Health Equipment Updated<br>";
			} else {
				echo "Error updating record: " . mysqli_error($dbc) . "<br>";
			}
		}


		if(empty($_POST['Other_Info'])){
		//adds name to array
		//$data_missing[] = 'Email';
		} else {
		//trim whitespace from the name and store the name
			$Other_Info = trim($_POST['Other_Info']);

			$query4 = "UPDATE DND.EQUIPMENT SET Other_Info = '$Other_Info' WHERE Character_Name = '$Character_Name'";

			if(mysqli_query($dbc, $query4)){
			echo "Other Info Updated<br>";
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