<html>
<head>
<title>New Character</title>
</head>
<body>
<form action ="http://localhost/characteradded.php" method="post">

<b>Add new Character</b>

<p>Character Name:
<input type="char(50)" name="Character_Name" size="50" value="" />
</p>

<p>Race:
<input type="text" name="race" size="30" value="" />
</p>

<p>Gender:
<input type="text" name="gender" size="20" value="" />
</p>

<p>Age:
<input type="integer" name="age" size="3" value="" />
</p>

<p>Level:
<input type="integer" name="lvl" size="2" value="" />
</p>

<p>Class:
<input type="text" name="class" size="30" value="" />
</p>

<p>Alignment:
<input type="text" name="alignment" size="30" value="" />
</p>

<p>User Name:
<input type="char(50)" name="userID" size="50" value="" />
</p>

<p>Campaign Name:
<input type="char(50)" name="camp_name" size="50" value="" />
</p>

<p>
<input type="submit" name="submit" value="Send" />
</p>
</form>

<p>
<b>Back to Character Manager</b>
<button onclick="location.href = 'charactermanage.php'"> Press Here </button>
</p>

</body>
</html>