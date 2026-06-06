import os

target_dir = "/var/www/html/nedi"
files = [f for f in os.listdir(target_dir) if f.endswith('.html') and f not in ['header.html', 'footer.html']]

# The snippet we just interpreted (from previous step 29/30)
current_script_snippet = """        // COMPONENT LOADER LOGIC
        function loadComponent(id, file) {
            fetch(file)
                .then(response => response.text())
                .then(data => {
                    document.getElementById(id).innerHTML = data;
                    if (id === 'header-placeholder') highlightActiveLink();
                });
        }
        function highlightActiveLink() {
            const currentFile = window.location.pathname.split('/').pop() || 'index.html';
            const links = document.querySelectorAll('#header-placeholder nav ul li a');
            links.forEach(link => {
                if (link.getAttribute('href') === currentFile) {
                    link.classList.add('text-green-600', 'font-bold', 'border-b-2', 'border-green-600');
                }
            });
        }
        loadComponent('header-placeholder', 'header.html');
        loadComponent('footer-placeholder', 'footer.html');"""

# New, robust snippet
new_script_snippet = """        // COMPONENT LOADER LOGIC
        function loadComponent(id, file) {
            fetch(file)
                .then(response => response.text())
                .then(data => {
                    document.getElementById(id).innerHTML = data;
                    if (id === 'header-placeholder') highlightActiveLink();
                });
        }
        function highlightActiveLink() {
            const path = window.location.pathname;
            const pathBase = path.split('/').pop().replace('.html', '').toLowerCase();
            const links = document.querySelectorAll('#header-placeholder nav ul li a');
            
            links.forEach(link => {
                const href = link.getAttribute('href');
                if (!href) return;
                const hrefBase = href.replace('.html', '').toLowerCase();
                
                // Match "index" (Home)
                if ((pathBase === '' || pathBase === 'index') && hrefBase === 'index') {
                    link.classList.add('text-green-600', 'font-bold', 'border-b-2', 'border-green-600');
                }
                // Match other pages
                else if (pathBase === hrefBase) {
                    link.classList.add('text-green-600', 'font-bold', 'border-b-2', 'border-green-600');
                }
            });
        }
        loadComponent('header-placeholder', 'header.html');
        loadComponent('footer-placeholder', 'footer.html');"""

for filename in files:
    filepath = os.path.join(target_dir, filename)
    with open(filepath, 'r') as f:
        content = f.read()
    
    # We look for the snippet inserted in previous step
    if current_script_snippet in content:
        new_content = content.replace(current_script_snippet, new_script_snippet)
        with open(filepath, 'w') as f:
            f.write(new_content)
        print(f"Updated {filename}")
    else:
        # Fallback: maybe we are running this on a file that wasn't updated or has slight differences
        # Let's try to replace the *original* snippet if the current one isn't found
        original_snippet = """        // COMPONENT LOADER LOGIC
        function loadComponent(id, file) {
            fetch(file)
                .then(response => response.text())
                .then(data => { document.getElementById(id).innerHTML = data; });
        }
        loadComponent('header-placeholder', 'header.html');
        loadComponent('footer-placeholder', 'footer.html');"""
        
        if original_snippet in content:
             new_content = content.replace(original_snippet, new_script_snippet)
             with open(filepath, 'w') as f:
                 f.write(new_content)
             print(f"Updated {filename} (from original)")
        else:
             print(f"Skipped {filename} (snippet not found)")
