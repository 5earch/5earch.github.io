<?php
    include("db.php");
    if(isset($_POST['del']))
    {
        $key = $_POST['key'];
        
        $database->getReference($key)->remove();
    	/*
    	echo "<script>".
    			"alert('Deleted Successfully');".
    			"window.location.href = 'read.php';".
    		"</script>";
    	*/
    	header("Location:read.php");
    }
?>