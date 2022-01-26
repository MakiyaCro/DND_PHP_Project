<html>
<head>
<title>Delete Character</title>
</head>
<body>
<form action ="http://localhost/characterdeleted.php" method="post">

<b>What character do you want to delete?</b>

<p>Character Name:
<input type="char(50)" name="Character_Name" size="50" value="" />
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