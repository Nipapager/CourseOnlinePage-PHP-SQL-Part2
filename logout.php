<?php
session_write_close();
session_save_path('./temp');
session_start();


session_destroy();
header("location: login.php");
?>