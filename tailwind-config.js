var link = document.createElement('link');
link.href = 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap';
link.rel = 'stylesheet';
document.head.appendChild(link);

tailwind.config = {
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
      colors: {
        blue: {
          800: '#005f99',
          900: '#0b4871',
        },
        green: {
          500: '#01a8a0',
          600: '#019991',
          700: '#018079',
        }
      }
    }
  }
}
