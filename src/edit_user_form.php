<?php
    require('../config/database.php');
    $user_id = $_GET['userId'];

    $sql_get_user="select * from users where id = '$user_id'";
    $result= pg_query($conn_local, $sql_get_user);

    if(!$result){
        die('Error'. pg_last_error());
    } while($row = pg_fetch_assoc($result)){
        $ide_number = $row['ide_number'];
        $fname = $row['firstname'];
        $lname = $row['lastname'];
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name = "edit_user_form" action = "update_user.php" method = "post"> 
        <tr><td><input type="text" name = "ide_number" value = "<?php echo"$user_id"?>" readonly required></td></tr>    
        <tr><td><label>Ide_number: </label></td></tr>
        <tr><td><input type="text" name = "ide_number" value = "<?php echo"$ide_number"?>" readonly required></td></tr>    
        <tr><td><label>Firstname: </label></td></tr>
        <tr><td><input type="text" name = "fname" value = "<?php echo"$fname"?>" required></td></tr>
        <tr><td><label>Lastname: </label></td> 
        <tr><td><input type="text" name = "lname" value = "<?php echo"$lname"?>" required></td></tr>
        <tr><td><button>Register</button></td></tr>
    </form>
</body>
</html>