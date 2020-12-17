<?php
session_start();
require("../config.php");
unset($_SESSION['user']);
$_SESSION['notification'] = array('alert' => 'success', 'title' => 'Berhasil', 'message' => 'Anda berhasil keluar.');
exit(header("Location: " . base_url()));
