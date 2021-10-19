<?php
  
  $name = '';
  $password = '';
  $gender = '';
  $color = '';
  $languages = [];
  $comments = '';
  $tc = '';

//check if searchterm has been sent, if so display it
if(isset($_POST['submit'])) {
    $ok = true;

   // echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES);
   //setup empty variables

        if(!isset($_POST['name']) || $_POST['name'] === ''){
            $ok = false;
        }  else{
                $name = $_POST['name'];
               // echo $name;
        };

        if(!isset($_POST['password'])  || $_POST['password'] === ''){
            $ok = false;
        } else {
            $password = $_POST['password'];
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
//languages is an array, so check if its an array, and also the length of the array
        if(!isset($_POST['languages']) || count($_POST['languages']) === 0){
            $ok = false;
         } else{
              $languages = $_POST['languages'];
        };

        if(!isset($_POST['comments']) || $_POST['comments'] === ''){
            $ok = false;
        } else {
            $comments = $_POST['comments'];
        };

        if(!isset($_POST['tc']) || $_POST ['tc'] === ''){
            $ok = false;
        } else {
            $tc = $_POST['tc'];
        };

//display on the screen
if($ok === true){
        printf('Username: %s
            <br>Password: %s
            <br>Gender: %s
            <br> Color: %s
            <br> Languages: %s
            <br> Comments: %s
            <br> Terms: %s ', 
            htmlspecialchars($name, ENT_QUOTES),
            htmlspecialchars($password, ENT_QUOTES),
            htmlspecialchars($gender, ENT_QUOTES),
            htmlspecialchars($color, ENT_QUOTES),
            htmlspecialchars(implode(' ', $languages), ENT_QUOTES),
            htmlspecialchars($comments, ENT_QUOTES),
            htmlspecialchars($tc, ENT_QUOTES) );

           
}
}
 ?>
<form action="" method="post">
    username: <input type="text" name="name"><br><br>
    Password: <input type="password" name="password"><br><br>
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
    Languages spoken:
    <select name="languages[]" multiple size="3">
        <option value="en">English</option>
        <option value="fr">French</option>
        <option value="esp">Spanish</option>
    </select><br><br>
    Comments:
    <textarea name="comments"></textarea><br><br>
    <input type="checkbox" name="tc" value="ok">
    I accept the terms & conditions<br><br>
    <input type="submit" name="submit" value="Register">
</form>