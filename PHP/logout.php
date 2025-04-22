<?php
session_start();
session_destroy();
header('Location: /Meets/view/login.html');
exit;
