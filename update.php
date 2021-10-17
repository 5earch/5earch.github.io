<?php
    include("db.php");
    if(isset($_POST['edit']))
    {
        $name = $_POST['name'];
        $key = $_POST['key'];
        
        $data = [
            'name' => $name
        ];
        
        $pushData = $database->getReference($key)->update($data);
        /*
        echo "<script>".
                "alert('Updated Successfully');".
                "window.location.href = 'read.php';".
            "</script>";
        */
        header("Location:read.php");
    }
?>