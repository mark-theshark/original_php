<html>
<body>
<?php echo "Update Record - PHP"  ?>
<br>

<?php

# retrieve data from POST

$name = $_POST['name'];
$phone = $_POST['phone'];
$id = $_POST['id'];

echo $name;
echo $phone;
echo $id;

# database operations

$user="root";
$password="";
$database="crm";

$query="UPDATE account SET name='$name', phone='$phone' WHERE id='$id'";

# mysqli method

$mysqli = new mysqli("localhost",$user,$password,$database);

#echo $query;

#$result = $mysqli->query($query);



if ($mysqli->query($query) === TRUE) {
    #header("Location: helloworld.php");
    header("Location: helloworld.php");
} else {
	echo "Update failed.  <a href=\"helloworld_u.php?id=$id\">Update</a>";
}

$mysqli->close();

?>

</body>
</html>