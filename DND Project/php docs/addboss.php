<html>
<head>
<title>New Boss</title>
</head>
<body>
<form action ="http://localhost/bossadded.php" method="post">

<b>Add new Boss</b>

<p>Boss name:
<input type="char(50)" name="Boss_Name" size="50" value="" />
</p>

<p>Level (CR or ECL):
<input type="integer" name="Lvl" size="3" value="" />
</p>

<p>Boss information:
<input type="char(250)" name="info" size="250" value="" />
</p>

<p>Campaign:
<input type="char(50)" name="Camp_Name" size="50" value="" />
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