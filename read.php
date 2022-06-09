<?php
    //connect to the db
    $db = new mysqli(
        'localhost',
        'root',
        '',
        'php_labs');
//sql statement
$sql = "SELECT * FROM users";

//query the database
$result = $db->query($sql);

//display the results
foreach($result as $row){
    printf(
        '<li><span>%s, %s, %s</span></li>',
        htmlspecialchars($row['color'], ENT_QUOTES),
        htmlspecialchars($row['name'], ENT_QUOTES),
        htmlspecialchars($row['gender'], ENT_QUOTES)
    );

}

//close db connection
$db->close();


?>