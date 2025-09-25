<?php
  //Step 1. get database connection
  require('../config/database.php');
  //Step 2. get form-data

  $e_mail = $_POST['email'];
  $p_wd = $_POST['passwd'];
  //Step 3 Validation

  $sql_check_user = "
    select 
	    u.email,
	    u.password
    from 
	    users  u
    where 
	    u.email = '$e_mail'
	    and u.password = '$p_wd'
    limit 1
  ";
  //Step 4
  $res_check = pg_query($conn, $sql_check_user);
  if (pg_num_rows($res_check) > 0){
    echo "User exists. Go to main !!!";
  } else {
    echo "Verify data";
  }