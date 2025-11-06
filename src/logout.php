<?php
    //Star
    session_start();
  
    //destroy current session
    session_destroy();

    //redirect
    header('refresh:0;url=signin.html');

?>