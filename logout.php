<?php
session_start();

unset($_SESSION["uid"]);


unset($_SESSION["uname"]);


session_destroy();


echo "<script>

alert('You are Logout Succefully')

window.location='index.php';


</script>";


?>