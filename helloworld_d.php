<html>
<body>
<?php echo "Delete Record - PHP"  ?>
<br>

<?php

# retrieve data from GET

$id = $_GET['id'];


# database operations

$user="root";
$password="";
$database="crm";

$query="DELETE FROM account WHERE id='$id'";

# mysqli method

$mysqli = new mysqli("localhost",$user,$password,$database);

echo $query;

if ($mysqli->query($query) === TRUE) {
    header("Location: helloworld.php");
} else {
	echo "Delete failed.  <a href=\"helloworld.php\">List</a>";
}

$mysqli->close();

?>

</body>
</html>