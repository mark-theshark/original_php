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

# mysqli method

$query="SELECT * FROM account ORDER BY name";
$mysqli = new mysqli("localhost",$user,$password,$database);

echo "<b>Accounts</b><br>";

$result = $mysqli->query($query);

while($row = mysqli_fetch_array($result))
  {

  	$name = $row['name'];
  	$phone = $row['phone'];
  	$id = $row['id'];

	echo "$name - $phone  <a href=\"helloworld_d.php?id=$id\">del</a> <a href=\"helloworld_u.php?id=$id\">u</a> <br>";

  }

$mysqli->close();

?>

<a href="helloworld_i.html">Add</a>

</body>
</html>