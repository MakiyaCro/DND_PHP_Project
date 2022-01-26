<html>
<head>
<title>New Campaign</title>
</head>
<body>
<form action ="http://localhost/campaignadded.php" method="post">

<b>Add new Campaign</b>

<p>Campaign name:
<input type="char(50)" name="Camp_Name" size="50" value="" />
</p>

<p>GM name:
<input type="text" name="GM_Name" size="20" value="" />
</p>

<p>Current number of Sessions:
<input type="integer" name="Number_Sessions" size="3" value="" />
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