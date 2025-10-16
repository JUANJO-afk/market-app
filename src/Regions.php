<?php
//Step 1. get database connection
  require('../config/database.php');
  //Step 2. get form-data
  $c_name = trim($_POST['cname']);
  $c_abbrev = trim($_POST['cabbrev']);
  $c_code = trim($_POST['ccode']);
  
  $res_check = pg_query($conn_supa);

  if (pg_num_rows($res_check)>0){
    echo"<script>alert('Users already exists !!')</script>";+
    header('refresh:0;url=Regions.html');
  } else{
      //Step 3. Create query to insert into
      $query = "
          INSERT INTO countries (
            countryname,
            cabbrev,
            id_country)
          values (
            '$c_name',
            '$c_abbrev',
            '$c_code'
          )
      ";
    //Step 4.
    $res = pg_query($conn_supa, $query);

    //Step 5. Validation
    if($res){
      //echo "User has been created successfully !!!";
      echo"<script>alert('Sucess !!! Go to Regions')</script>";+
      header('refresh:0;url=Regions.html');
    } else {
      echo "Something wrong";
    }
  }
?>