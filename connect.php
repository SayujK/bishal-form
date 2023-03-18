<?php
    $host = 'localhost';
    $username = 'root';
    $pass = '';
    $dbname = 'student';
    $conn = mysqli_connect($host,$username,$pass,$dbname);
	
    if(!$conn){
        die("Couldnot Connect".mysqli_error());
    }
    echo "Connected";

	$date = $_POST["date"];
    $name = $_POST["name"];
	
	$sql = "INSERT INTO `tbl_attendance`(`date`, `name`) VALUES ('$date','$name')";
	
	$r = $conn -> query($sql);
    if($r){
        die("Data insert Suscessfull");
    }else{
        die("Error while inserting data");
    }
?>

