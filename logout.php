<?php
// start session
session_start();
session_destroy();
header("Location: http://localhost/gsproject/login.php");
exit();

?>