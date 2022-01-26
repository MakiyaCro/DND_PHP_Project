<html>
<head>
<title>New Equipment</title>
</head>
<body>
<form action ="http://localhost/equipmentadded.php" method="post">

<b>Add new Equipment for a Character</b>

<p>Character Name:
<input type="char(50)" name="Character_Name" size="50" value="" />
</p>

<p>Fav_Weapon:
<input type="text" name="Fav_Weapon" size="30" value="" />
</p>

<p>Gold Equivalent:
<input type="integer" name="GP_Equiv" size="10" value="" />
</p>

<p>Health Equipment:
<input type="text" name="Health_Equip" size="50" value="" />
</p>

<p>Other Info:
<input type="text" name="Other_Info" size="250" value="" />
</p>

<p>
<input type="submit" name="submit" value="Send" />
</p>
</form>

<p>
<b>Back to Equipment Manager</b>
<button onclick="location.href = 'equipmentmenu.php'"> Press Here </button>
</p>

</body>
</html>