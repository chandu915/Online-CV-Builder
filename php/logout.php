<?php
echo "Logout";
session_unset();
session_destroy();
sleep(3);

header("Location: http://localhost/cv");
?>