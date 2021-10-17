<?php
	include("db.php");
	if(isset($_POST['add']))
	{
		$name=$_POST['name'];

		$data=[
			'name' => $name
		];

		$ref = "data/";
    	$pushData = $database->getReference($ref)->push($data);
    	/*
    	echo "<script>".
    			"alert('Added Successfully');".
    			"window.location.href = 'add.php';".
    		"</script>";
    	*/
    	header("Location:add.php");
    }
?>