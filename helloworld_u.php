<html>
<body>
<?php echo "Update Record - PHP"  ?>
<br>

<?php

# retrieve data from GET

$id = $_GET['id'];

#echo "Id:".$id;


# database operations

$user="root";
$password="";
$database="crm";

$query="SELECT * FROM account WHERE id='$id'";

# mysqli method

$mysqli = new mysqli("localhost",$user,$password,$database);

#echo $query;

$result = $mysqli->query($query);

while($row = mysqli_fetch_array($result))
  {

  	$name = $row['name'];
  	$phone = $row['phone'];

	echo  
	"<form action=\"helloworld_u2.php\" method=\"post\">
	Account Name: <input type=\"text\" name=\"name\" value=\"$name\">
	Telephone: <input type=\"text\" name=\"phone\" value=\"$phone\">
	<input type=\"hidden\" name=\"id\" value=\"$id\">
	<br><input type=\"submit\"value=\"Update\"></form><br>
	";
  }

$mysqli->close();

?>

</body>
</html>