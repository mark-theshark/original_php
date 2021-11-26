<html>
<body>
<?php echo "Add Record - PHP"  ?>
<br>

<?php

# retrieve data from POST

$name = $_POST['name'];
$phone = $_POST['phone'];

echo $name.$phone;


# database operations

$user="root";
$password="";
$database="crm";

$query="INSERT INTO account (id,name,phone)  VALUES ('','$name','$phone')";

# mysqli method

$mysqli = new mysqli("localhost",$user,$password,$database);

echo $query;

if ($mysqli->query($query) === TRUE) {
    header("Location: helloworld.php");
} else {
	echo "Insert failed.  <a href=\"helloworld_i.html\">Add</a>";
}

$mysqli->close();



# mysql method

/*

mysql_connect("localhost",$user,$password);
mysql_select_db($database) or die( "Unable to select database");


echo $query;
$result = mysql_query($query);

echo $result;
if($result){
	    echo "<br>Create Account: $name -- succeeded.";
	} else{
	    echo "<br>Input data is fail";
	}

mysql_close();

*/

?>

</body>
</html>