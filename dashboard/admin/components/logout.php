<?php
echo "Logout";
session_unset();
session_destroy();
sleep(1);

header("Location: http://localhost/cv");
?>