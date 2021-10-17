<?php
	if(isset($_POST['edit']))
	{
		$name=$_POST['name'];
		$key=$_POST['key'];

?>
<html>
<head>
	<title>Insert Data</title>
	<STYLE>
		a {text-decoration: none;} 
	</STYLE>
</head>
<body>
	<a href='read.php'>
		<button>Back</button>
	</a>
	<br><br>
	<form action="update.php" method="post">
		<input type="text" name="name" value="<?php echo $name; ?>">
		<input type="hidden" name="key" value="<?php echo $key; ?>">
		<input type="submit" name="edit" Value="Update">
	</form>

<?php
	}
?>

</body>
</html>