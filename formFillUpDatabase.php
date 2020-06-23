<?php

if(isset($_REQUEST["id"]) && isset($_REQUEST["fname"]) && isset($_REQUEST["lname"]) && isset($_REQUEST["mail"]) && isset($_REQUEST["pwd"]) && isset($_FILES["profilePic"])){

$id=$_POST["id"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["mail"];
$password=$_POST["pwd"];
$profile=$_FILES["profilePic"];

$tmpName=$profile["tmp_name"];
$Name=$profile["name"];
move_uploaded_file($tmpName,"images/$Name");


 $conn=mysqli_connect("localhost","root","","formfillup");
 
    
    $sql="INSERT INTO infotable VALUES($id,'$fname','$lname','$email','$password','$Name')";
	$result= mysqli_query($conn,$sql);
	
	if($result==true){
		header("location: formfillUp.php?action=true");
	}
	else header("location: formfillUp.php?action=false");
 }
 else 
	  header("location: formfillUp.php? please fill all field !!!");
?>
