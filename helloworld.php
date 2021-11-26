<html>
<body>


<br>

<?php 
#phpinfo() 
?>

<?php

# get sqlite3 db connection
$db = new SQLite3('./db/test.db');

# execute SQL query
$results = $db->query('SELECT id, lastname, phone FROM leads');

echo "<b>Leads</b><br>";

while ($row = $results->fetchArray()) {

	$id = $row['id'];
  	$name = $row['lastname'];
  	$phone = $row['phone'];

	echo "$name - $phone  <a href=\"helloworld_d.php?id=$id\">del</a> <a href=\"helloworld_u.php?id=$id\">u</a> <br>";

  }

?>

<a href="helloworld_i.html">Add</a>

</body>
</html>