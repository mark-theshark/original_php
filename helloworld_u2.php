<html>
<body>
<?php echo "Update Record - PHP"  ?>
<br>

<?php

# retrieve data from POST

$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$id = $_POST['id'];

echo $lastname;
echo $phone;
echo $id;

# get sqlite3 db connection
$db = new SQLite3('./db/test.db');

# execute SQL query
$query="UPDATE leads SET lastname='$lastname', phone='$phone' WHERE id=$id";

#echo $results;

if ($db->query($query)) {
    header("Location: helloworld.php");
} else {
	echo "Update failed.  <a href=\"helloworld_u.php?id=$id\">Update</a>";
}

?>

</body>
</html>