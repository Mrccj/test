<?php
$link=mysql_connect('localhost','root','root')or die('连接失败：'.mysql_error());
mysql_select_db('lyb',$link)or die('数据库连接失败：'.mysql_error());
?>