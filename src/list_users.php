<?php
    //Step 1. get database connection
    require('../config/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border ="1" align = "center">
        <tr>
            <th>Fullname </th>    
            <th>E-mail </th>    
            <th>Ide. number </th>    
            <th>Phone number </th>
            <th>Status</th>    
            <th>Options </th>    
        </tr>
        <?php
            $sql_users= "
                select 
                    u.firstname || u.lastname as fullname,
                    u.email,
                    u.ide_number,
                    u.mobile_number,
                    case 
                        when u.status = true then 'Active' else 'Inactive'
                    end as status
                from 
                    users u
                
            "
            $result = pg_query($conn_local, $sql_users);
            if(!$result){
                die("Error:::".pg_last_error());
            }
            while($row = pg_fetch_assoc($result)){
                echo"<tr>
                    
                        <td>".$row['fullname']." </td>    
                        <td>joa@gmail.com </td>    
                        <td>12315487 </td>    
                        <td>5456132</td>    
                        <td>Active </td>    
                        <td>
                            <a href = '#'><img  src = "icons/lupa.png" width = "20"><a>
                            <a href = '#'>Update<a>
                            <a href = '#'>Delete<a>
                        </td>
                    </tr>"
            }
        ?>
    </table>
</body>
</html>