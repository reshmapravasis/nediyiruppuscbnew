import os
import glob

workspace = '/var/www/html/nediyiruppuscbnew'
php_files = glob.glob(os.path.join(workspace, '**/*.php'), recursive=True)

for file_path in php_files:
    with open(file_path, 'r') as f:
        content = f.read()
    
    if "session_save_path" in content:
        # replace any session_save_path(__DIR__ ...) with session_save_path(sys_get_temp_dir());
        content = content.replace("session_save_path(__DIR__ . '/sessions');", "session_save_path(sys_get_temp_dir());")
        content = content.replace("session_save_path(__DIR__ . '/../sessions');", "session_save_path(sys_get_temp_dir());")
        content = content.replace("session_save_path(__DIR__.'/sessions');", "session_save_path(sys_get_temp_dir());")
        content = content.replace("session_save_path(__DIR__.'/../sessions');", "session_save_path(sys_get_temp_dir());")
        
        with open(file_path, 'w') as f:
            f.write(content)
        print(f"Updated {file_path}")
