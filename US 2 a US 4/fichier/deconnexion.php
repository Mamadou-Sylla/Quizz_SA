 <?php
    session_start();
    $_SESSION=array();
    session_destroy();
    unset($_SESSION);
    unset($_COOKIE);
    header('Cache-control: no-store, no:cache, must-re');
    header ('Location: ../index.php');
           exit;
 if(!isset($_SESSION)){
    header ('Location: ../index.php');
 }
?>
