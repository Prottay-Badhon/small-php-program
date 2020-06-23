<html>
<head></head>
<body>
<h1>Registration is going on for CSE FEST 2020</h1>
<p>If you agree to registration please fill the requierment</p>

<?php
if( isset($_REQUEST["action"]) ){
	if($_REQUEST["action"]=="true"){
		echo "<font color='green' size=25> data insertd successfully </font>" ;
	}
	
	else if($_REQUEST["action"]=="deleted"){
		echo "<font color='green' size=25> data has been deleted successfully </font>" ;
	}
	
	else if($_REQUEST["action"]=="edited"){
		echo "<font color='navy' size=25> data has been Edited successfully </font>" ;
	}
	
	else 
		echo "<font color='red' size=25> data is not insertd</font>" ;
}


?>

<form method="post" action="formFillUpDatabase.php" enctype="multipart/form-data">
<table>
<tr><td>ID:</td> <td><input type="number" name="id" placeholder="Enter ID "/></td></tr>
<tr><td>FirstName:</td> <td><input type="text" name="fname"placeholder="Enter firstName"/></td></tr>
<tr><td>LastName:</td> <td><input type="text" name="lname" placeholder="Enter lastName "/></td></tr>
<tr><td>Email:</td> <td><input type="email" name="mail" placeholder="Enter email"/></td></tr>
<tr><td>Password:</td> <td><input type="password" name="pwd" placeholder="Eneter password"/></td></tr>
<tr><td>profile Pic:</td> <td><input type="file" name="profilePic" /></td></tr>
<tr><td></td> <td><input type="submit" value="Save"/></td></tr>
</table>
</form>
<?php 
 $conn=mysqli_connect("localhost","root","","formfillup");
  $sql2="SELECT * FROM infotable";
  $sqlShow=mysqli_query($conn,$sql2);?>
  
 
<table border>
<tr>
   <th>ID</th>
   <th>FirstName</th>
   <th>LastName</th>
   <th>email</th>
   <th>password</th>
   <th>profilePic</th>
   <th>Action</th>
</tr>
  
 
   <?php while($show=mysqli_fetch_assoc($sqlShow)){?>
	   
	   
	   

<tr>
   <td><?php echo $show["ID"];?></td>
   <td><?php echo $show["fname"];?></td>
   <td><?php echo $show["lname"];?></td>
   <td><?php echo $show["email"];?></td>
   <td><?php echo $show["password"];?></td>
   <td><?php echo $show["profile"];?></td>
   <td><a href="editData.php?id=<?php  echo $show["ID"]?>">Edit </a> | <a href="deleteData.php?id=<?php  echo $show["ID"] ?>">Delete </a></td>
   
</tr>
<?php }?>
</table>


</body>
</html>



