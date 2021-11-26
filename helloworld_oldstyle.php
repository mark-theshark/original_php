<html>
<body>


<br>

<?php 
#phpinfo() 
?>

<?php
$user="root";
$password="";
$database="crm";

# mysql legacy method

mysql_connect("localhost",$user,$password);
mysql_select_db($database) or die( "Unable to select database");

$query="SELECT * FROM account ORDER BY name";
$result = mysql_query($query);
$num=mysql_numrows($result);

#echo "rows in account table: $num<br>";	
#echo "$query<br>";
echo "<b>Accounts</b><br>";

$i=0;
while ($i < $num) {
	$name=mysql_result($result,$i,"name");
	$phone=mysql_result($result,$i,"phone");
	$id=mysql_result($result,$i,"id");
	echo "$name - $phone  <a href=\"helloworld_d.php?id=$id\">del</a> <a href=\"helloworld_u.php?id=$id\">u</a> <br>";

	$i++;
}

mysql_close();
?>

<a href="helloworld_i.html">Add</a>

</body>
</html>