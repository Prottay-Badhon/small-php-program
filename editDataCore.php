<?php
  $editId=$_REQUEST["id"];
  $editFname=$_REQUEST["fname"];
  $editLname=$_REQUEST["lname"];
  $editEmail=$_REQUEST["mail"];
  $editPwd=$_REQUEST["pwd"];
 
  $conn=mysqli_connect("localhost","root","","formfillup");
 
 $sql="UPDATE  infotable SET ID=$editId,fname='$editFname',lname='$editLname',email='$editEmail',password='$editPwd' WHERE ID=$editId";
 $result= mysqli_query($conn,$sql);
 if($result){
	 header("location:formfillUp.php?action=edited");
 }


?>