<?php
    echo "Welcome to main";

    session_start();
  
    if(!isset($_SESSION['session_user_id'])){
        header('refresh:0;url=error_403.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market - Home</title>
    
    <link rel   ="icon" type "image/png" href="src/icons/market_main.png"/>
</head>
<body>
<table border= "0" align ="center">
    <tr>
    <b>User: </b>
    <td><?php echo $_SESSION['session_user_fullname']; ?>
    <td><?php echo "<img src='" .$_SESSION['session_user_url_photo']."' width='30'>";?></td>
    
</td>
    </tr>
</table>
    <a href="List_users.php">List all users</a> //
    <a href="logout.php">Logout</a>
</body>
</html>