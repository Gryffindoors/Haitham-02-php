<?php
session_start();
session_destroy();

header("Location: ../home.php"); // redirect to home page
exit;
