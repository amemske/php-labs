<?php
  
  $fullname = '';
  $gender = '';
  $color = '';


//check if searchterm has been sent, if so display it
if(isset($_POST['submit'])) {
    $ok = true;

   // echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES);
   //setup empty variables

        if(!isset($_POST['fullname']) || $_POST['fullname'] === ''){
            $ok = false;
        }  else{
                $fullname = $_POST['fullname'];
               // echo $fullname;
        };

        

        if(!isset($_POST['gender']) || $_POST['gender'] === ''){
            $ok = false;
        } else {
            $gender = $_POST['gender'];
        };
        
        if(!isset($_POST['color']) || $_POST['color'] === ''){
            $ok = false;
        } else {
            $color = $_POST['color'];
        };

//display on the screen
if($ok === true){

    $servername   = "localhost";
    $username = "root";
    $password = "";
    $database = "php_labs";
       //add database code
       $db = mysqli_connect( $servername, $username, $password, $database);

       // Check connection
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        echo "Connected successfully";
 

    $sql = sprintf(
        "INSERT INTO users (fullname, gender, color)   
        VALUES ('%s', '%s', ''%s);",
        $db->real_escape_string($fullname),
        $db->real_escape_string($gender),
        $db->real_escape_string($color)
    );

 

    //send to database
    $db->query($sql);
        echo '<p>User Added</p>';
    //exit
    $db->close();

           
}

}
 ?>
<form action="" method="post">
    username: <input type="text" name="fullname"><br><br>
    Gender:
    <input type="radio" name="gender" value="f"> Female
    <input type="radio" name="gender" value="m"> Male
    <input type="radio" name="gender" value="o"> Other<br><br>
    Favorite color:
    <select name="color">
        <option value="">Please select</option>
        <option value="I choose red">Red</option>
        <option value="I choose green">Green</option>
        <option value="I choose blue">Blue</option>
    </select><br><br>

    <input type="submit" name="submit" value="Register">
</form>