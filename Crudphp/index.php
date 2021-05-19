<?php
    if ($firstname isset($_POST['firstname']);
    $lastname isset($_POST['lastname']);) {
        echo $firstname '<br>';
        echo $lastname;
    }
    
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Sign up</title>
</head>
<body>
   
    <form method="post" action="index.php" >
        <input type="text" name="firstname" placeholder="Firstname">
        <input type="text" name="lastname" placeholder="Lastname">
        <input type="button" name="submit" value="Add Member">
    </form>

<?php //require 'inc/footer.php';?>

</body>
</html>