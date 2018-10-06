<?php
session_start();

unset($_SESSION["aid"]);

unset($_SESSION["em"]);


session_destroy();


echo "<script>

alert('Admin Logout succefully')

window.location='index.php';

</script>";



?>