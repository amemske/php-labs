<?php
    //connect to the db
    $db = new mysqli(
        'localhost',
        'root',
        '',
        'mytodos');
//sql statement
$sql = "SELECT * FROM todos";

//query the database
$results = $db->query($sql);
echo "<pre>";
print_r($results->fetch_assoc()); //debug to see the db results
echo "</pre>";
//display the results
foreach($results as $result){
    printf(
        '<li><span>%s, %s</span></li>',
        htmlspecialchars($result['Id'], ENT_QUOTES), // when fetching records, results are case sensitive
        htmlspecialchars($result['Description'], ENT_QUOTES)
    );

}

//close db connection
$db->close();


?>