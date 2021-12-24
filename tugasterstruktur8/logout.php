<?php
session_start();
session_unset();
session_destroy();

header("location: /skd/tugasTerstruktur8/login.php");
exit;