<?php
session_start();

session_destroy();
//redirect
header('location: /sessions.php');