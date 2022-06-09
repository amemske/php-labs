 <?php
//check if searchterm has been sent, if so display it
if(isset($_POST['searchterm'])) {
    echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES);
}
 ?>

 <form action="" method="post">
     username: <input type="text" name="searchterm">
     Password: <input type="password" name="password">
     Gender:
     <input type="radio" name="gender" value="f"> Female
     <input type="radio" name="gender" value="f"> Male
     <input type="radio" name="gender" value="f"> Other<br>
     Favorite color:
     <select name="color">
         <option value="">Please select</option>
         <option value="I choose red">Red</option>
         <option value="I choose green">Green</option>
         <option value="I choose blue">Blue</option>
     </select><br>
     Languages spoken:
     <select name="languages[]" multiple size="3">
         <option value="en">English</option>
         <option value="fr">French</option>
         <option value="esp">Spanish</option>
     </select><br>
     Comments:
     <textarea name="comments"></textarea>
     <input type="checkbox" name="tc" value="ok">
     I accept the terms & conditions<br>
     <input type="submit" value="Register">
 </form>