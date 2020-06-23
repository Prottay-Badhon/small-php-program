<a href="cuAdmission.html"><input type="button" value="Home page"/></a>
<?php
$editId=$_REQUEST["id"];
$conn=mysqli_connect("localhost","root","","formfillup");
 
 $sql="SELECT * FROM infotable WHERE ID=$editId";
 $result= mysqli_query($conn,$sql);
?>
<?php while($row=mysqli_fetch_assoc($result)){ ?>
<form method="post" action="editDataCore.php" enctype="multipart/form-data">
<table>
<tr><td>ID:</td> <td><input type="number" name="id" placeholder="Enter ID "value="<?php  echo $row['ID'];?>"/></td></tr>
<tr><td>FirstName:</td> <td><input type="text" name="fname"placeholder="Enter firstName" value="<?php  echo $row['fname'];?>"/></td></tr>
<tr><td>LastName:</td> <td><input type="text" name="lname" placeholder="Enter lastName "value="<?php  echo $row['lname'];?>"/></td></tr>
<tr><td>Email:</td> <td><input type="email" name="mail" placeholder="Enter email"value="<?php  echo $row['email'];?>"/></td></tr>
<tr><td>Password:</td> <td><input type="text" name="pwd" placeholder="Eneter password" value="<?php  echo $row['password'];?>"/></td></tr>
<tr><td>profile Pic:</td> <td><input type="file" name="profilePic" /></td></tr>
<tr><td></td> <td><input type="submit" value="Update"/></td></tr>
</table>
</form>
<?php } ?>