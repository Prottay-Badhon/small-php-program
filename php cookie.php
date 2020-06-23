<?php
$host="localhost";
$usrName="infoTable";
$pwd=12345;
$dbName="badhon360";
$conn=mysqli_connect($host,$usrName,$pwd,$dbName);
if($conn){
	$sql="select * from employinfo where ID=101";
	$result=mysqli_query($conn,$sql);
	
	
	while($row=mysqli_fetch_assoc($result) ){
         echo $row["ID"]." ".$row["Fname"]." ".$row["Lname"]." ".$row["email"]." ".$row["Password"]." ".$row["sumit time"] ." ".$row["Address"];
	}
	
}
else 
	echo $conn;

?>