<?php
$ID=$_REQUEST["id"];
$conn=mysqli_connect("localhost","root","","formfillup");
$sql="DELETE FROM infotable WHERE ID=$ID";
$result= mysqli_query($conn,$sql);
if($result){
	
	header("location:formfillUp.php?action=deleted");
}



?>