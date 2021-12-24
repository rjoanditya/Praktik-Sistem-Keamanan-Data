<?php
session_start();
session_unset();
session_destroy();

header("location: /utspskd/login.php");
exit;