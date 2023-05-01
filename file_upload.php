<?php
//STEPS
//check to see if form is submitted
//Check that the files super global is not empty
//print_r the files super global to see what is inside
//else add message - 'Please add a file'
//display message in the body if it exists
if (isset($_POST['submit'])) {
    if (!empty($_FILES['upload']['name'])) {
        // name is a property of the object $_FILES
        //echo '<pre>';
        //print_r($_FILES);
        // echo '</pre>';

        //allowed extensions
        $allowed_ext = array('png', 'jpg', 'jpeg', 'gif', 'pdf');

        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_temp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}"; //why curly brackets

        // get the file extension
        $file_ext = explode('.', $file_name);
        $file_ext_end = (strtolower(end($file_ext)));
        echo $file_ext_end;

        //validate file extension
        if (in_array($file_ext_end, $allowed_ext)) {
            //validate file size
            if ($file_size <= 8000000) {
                //move uploaded file from temp folder to target dir
                move_uploaded_file($file_temp, $target_dir);
                $message = '<p style="color:green;">The file has been successfully uploaded.</p>';
            } else {
                $message = '<p style="color:red;">File is too large</p>';
            }
        } else {
            $message = '<p style="color:red;">Invalid file type</p>';
        }
    } else {
        $message = '<p style="color:red;">Please add a file</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="upload">
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>