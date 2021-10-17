<?php
	include("db.php");
	$ref = "data/";
    $data = $database->getReference($ref)->getValue();
    $count = $database->getReference($ref)->getSnapshot()->numChildren();
?>
<html>
<head>
	<title>Read Data</title>
	<STYLE>
		a {text-decoration: none;} 
	</STYLE>
</head>
<body>
<a href='index.php'>
	<button>Back</button>
</a>
<a href='add.php'>
		<button>Add</button>
	</a>
<br><br>

	<table border='1' >
	    <tr>
	    	<th>Name</th>
	    	<th colspan=2>Count : <?php echo $count; ?></th>
	    </tr>

<?php
		foreach ($data as $key => $value) {
?>

		<tr>
	    	<td><?php echo $value['name']; ?></td>
	    	<td>
		   		<br>
		   		<form action="edit.php" method="post">
					<input type="submit" name="edit" value="Edit">
					<input type="hidden" name="key" value="data/<?php echo $key; ?>">
					<input type="hidden" name="name" value="<?php echo $value['name']; ?>">
				</form>
	  		</td>
	  		<td>
		   		<br>
		   		<form action="delete.php" method="post">
					<input type="submit" name="del" value="Delete">
					<input type="hidden" name="key" value="data/<?php echo $key; ?>">
				</form>
	  		</td>
	    </tr>

<?php
    	}
?>
</table>
</body>
</html>