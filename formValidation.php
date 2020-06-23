<?php
$roll=$_POST["inputRoll"];
$name=$_POST["inputName"];
$home=$_POST["inputHome"];
$profilePic=$_FILES["profilePic"];
$password=$_POST["inputPassword"];
$encriptedPassword=md5($password);
?>
<pre>
<?php
  var_dump($profilePic);
  echo "<br/>";
  $fileName= $profilePic["name"];
  echo "<br/>";
  $tmp_name= $profilePic["tmp_name"];
  move_uploaded_file($tmp_name,"images/$fileName");
  
  echo "<img src='images/$fileName'/>";
  
 ?> 
 </pre>

 
/*
$conn=mysqli_connect("localhost","root","","formvalidation");
if($conn){
	$sql="INSERT INTO login Values($roll,'$name','$home','$encriptedPassword');";
$result=mysqli_query($conn,$sql);
}
*/
