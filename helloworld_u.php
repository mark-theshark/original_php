<html>
<body>
<?php echo "Update Record - PHP"  ?>
<br>

<?php

# retrieve data from GET

$id = $_GET['id'];

echo "Id:".$id;

# get sqlite3 db connection
$db = new SQLite3('./db/test.db');

# execute SQL query
$results = $db->query("SELECT id, lastname, phone FROM leads WHERE id=$id");

while ($row = $results->fetchArray()) {

  	$lastname = $row['lastname'];
  	$phone = $row['phone'];

	echo  
	"<form action=\"helloworld_u2.php\" method=\"post\">
	Last Name: <input type=\"text\" name=\"lastname\" value=\"$lastname\">
	Telephone: <input type=\"text\" name=\"phone\" value=\"$phone\">
	<input type=\"hidden\" name=\"id\" value=\"$id\">
	<br><input type=\"submit\"value=\"Update\"></form><br>
	";
  }

?>

</body>
</html>