<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
include "conn.php";
//$SQL="select * from lyb";
$SQL="SELECT * FROM  `lyb` ORDER BY  `lyb`.`time` DESC LIMIT 0 , 30";
$result=mysql_query($SQL);

$rows=mysql_num_rows($result);
echo "<div class='tj';>"."数据库一共有".$rows."条记录"."<span>"."Mrccj简易show留言板"."</span>"."</br>"."</div>";

 while($row=mysql_fetch_row($result)){ 
 	echo "<div class='maxbox'>";
    echo "<div class='box-top'>"."第：".$row[0]."条留言"."</div>";     //row[i]该行的第几个字段（即第几列）
    echo "<div class='box'>"."姓名：".$row[1]."<br/>"."</div>";
	    echo "<div class='box'>"."留言时间：".$row[2]."<br/>"."</div>";
	 	    echo "<div class='box'>"."联系电话：".$row[3]."<br/>"."</div>";
	 	 	    echo "<div class='box'>"."邮箱地址：".$row[4]."<br/>"."</div>";
	   	 	    echo "<div class='box'>"."联系地址：".$row[5]."<br/>"."</div>";
		 	    echo "<div class='box'>"."留言内容："."<div class='ly-nr'>".$row[6]."</div>"."<br/>"."</div>";
		
		echo "</div>";
		
}

?>
<body>
<style>
body{
	background-color:#f8f8f8;}
.maxbox{
	width:600px;
	height:400px;
	margin:auto;
	margin-bottom:30px;
	border:#000 1px dashed;
	background-color:#FFF;}
.box{
	width:100%;
	height:20px;
	border:#000 1px dashed;
	margin:auto;
	margin-top:5px;
	}
.box-z{

	}
.ly-nr{
	width:100%;
	height:200px;
	border: dashed 1px #333;
	margin-top:10px;}
.tj{
	width:600px;
	margin:auto;
	margin-bottom:10px;
	}
.tj span{
	margin-left:280px;}
.box-top{
	text-align:center;
}
</style>
</body>
</html>