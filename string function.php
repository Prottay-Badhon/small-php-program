<html>
<head>
</head>
 <body>
 <?php
 $x="My name is Badhon";
 echo strlen($x);
 echo str_word_count($x);
 echo strrev($x);
 echo strpos($x,"Badhon");
 $y=array("Badhon","Bonhi","shuvo","Tahmina");
 echo " ";
 echo md5($x);
 echo str_repeat($x,6);
 echo "</br>";
 $i=1;
 foreach($y as $x){
	 
	echo "$i.$x";
	$i++;
 }
  echo "</br>";
 
$city=array("Dhaka","Rajshahi","Chittagong","Khulna","Sylhet","Rangpur","Barishal","Comilla","Noakhali","Bogura","Pabna");
  for($j=0;$j<count($city);$j++){
	  echo $city[$j];
	   echo "</br>";
  }
 ?>
 </body>
<html>