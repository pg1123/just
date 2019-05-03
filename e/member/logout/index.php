<?php
session_destroy();
unset($_SESSION);
unset($_COOKIE['wwogcmlusername']);
echo "<script>location.href='/';</script>";
?> 