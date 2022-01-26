<html>
<head>
<title>New User</title>
</head>
<body>
<form action ="http://localhost/useradded.php" method="post">

<b>Add new User</b>

<p>User Name:
<input type="char(50)" name="User_Name" size="50" value="" />
</p>

<p>Phone Number ###-###-####:
<input type="char(12)" name="Phone_Number" size="12" value="" />
</p>

<p>Email:
<input type="text" name="email" size="70" value="" />
</p>


<p>
<input type="submit" name="submit" value="Send" />
</p>
</form>

<p>
<b>Back to Main Page</b>
<button onclick="location.href = 'mainpage.php'"> Press Here </button>
</p>

</body>
</html>