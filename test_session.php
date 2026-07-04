<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_save_path(__DIR__ . '/nonexistent_folder');
session_start();
echo "Done";
