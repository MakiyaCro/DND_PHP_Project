<html>
<head>
<title>Campaign Character Update</title>
</head>
<body>
<form action ="http://localhost/charactermoved.php" method="post">

<b>What character are you moving?</b>

<p>Character Name:
<input type="char(50)" name="Character_Name" size="50" value="" />
</p>

<p>What campaign would you like to move them to?
<input type="char(50)" name="camp_name" size="50" value="" />
</p>

<p>
<input type="submit" name="submit" value="Send" />
</p>
</form>

<p>
<b>Back to Campaign Manager</b>
<button onclick="location.href = 'campaignmanage.php'"> Press Here </button>
</p>

</body>
</html>