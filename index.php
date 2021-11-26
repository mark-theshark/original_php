<html>
<body>


<br>

<?php 
#phpinfo() 
?>

<h3>Let's begin with you are here.</h3>

<?php

# get sqlite3 db connection
$db = new SQLite3('./db/test.db');

# execute SQL query
$results = $db->query('SELECT text,priority FROM memos');

# loop through results and print out to html
while ($row = $results->fetchArray()) {

    $memo = $row['text'];
    $priority = $row['priority'];

    echo "Memo: $memo - Priority: $priority</br>";

    #var_dump($row);
}

echo "<p><b>the sqlite3 db call worked</b></p>";

?>





</body>
</html>