<html>
<body>
<?php echo "Delete Record - PHP"  ?>
<br>

<?php

# retrieve data from GET

$id = $_GET['id'];

# get sqlite3 db connection
$db = new SQLite3('./db/test.db');

$query="DELETE FROM leads WHERE id='$id'";

echo $query;

if ($db->query($query)) {
    header("Location: helloworld.php");
} else {
	echo "Delete failed.  <a href=\"helloworld.php\">List</a>";
}

?>

</body>
</html>