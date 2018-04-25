<?php

include "conn.php";
if(isset($_POST['ok'])){
	//接收用户信息
     $nr=$_POST['message'];
     $name=$_POST['name'];
     $mob=$_POST['mob'];
     $mail=$_POST['mail'];
	 $address=$_POST['address'];
	  $time=date('Y-m-d H:i:s', strtotime('now'));
echo $time;
echo $nr;
echo $name;
echo $mob;
echo $mail;
echo $address;
echo $time;
     
	 //判断验证码是否一致不一致不执行以不代码
		 $cr="INSERT INTO `lyb`(`name`,`time`,`mob`,`mail`,`address`,`nr`) VALUES ('$name','$time','$mob','$mail','$address','$nr')";
			 $crtj=mysql_query($cr);
			 
			 
			 

}


?>
