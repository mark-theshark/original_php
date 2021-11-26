<html>
<body>
<?php echo "Add Record - PHP"  ?>
<br>

<?php

# retrieve data from POST

$lastname = $_POST['lastname'];
$phone = $_POST['phone'];

echo $lastname.$phone;

# get sqlite3 db connection
$db = new SQLite3('./db/test.db');

# execute SQL query

$query="INSERT INTO leads (id,lastname,phone)  VALUES (NULL,'$lastname','$phone')";

echo $query;

if ($db->query($query)) {
    header("Location: helloworld.php");
} else {
	echo "Insert failed.  <a href=\"helloworld_i.html\">Add</a>";
}

?>

</body>
</html>