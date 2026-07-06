<?php
session_save_path(sys_get_temp_dir());
session_start();

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
exit;