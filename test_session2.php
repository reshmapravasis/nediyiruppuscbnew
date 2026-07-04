<?php
session_save_path(sys_get_temp_dir());
session_start();
echo "Session save path is: " . session_save_path();
