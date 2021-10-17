<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
	<STYLE>
		a {text-decoration: none;} 
	</STYLE>
</head>
<body>
	<a href='index.php'>
		<button>Back</button>
	</a>
	<a href='read.php'>
		<button>Read</button>
	</a>
	<br><br>
	<form action="store.php" method="post">
		<input type="text" name="name">
		<input type="submit" name="add">
	</form>
</body>
</html>