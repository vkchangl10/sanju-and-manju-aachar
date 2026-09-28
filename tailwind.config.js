/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.{ts,tsx,js,jsx}',
  ],
  theme: {
    screens: {
      xs: '360px',
      sm: '390px',
      md: '412px',
      lg: '768px',
      xl: '1024px',
      '2xl': '1366px',
      '3xl': '1920px',
    },
    extend: {
      colors: {
        green: '#1F3B2B',
        ivory: '#FDF8F0',
        turmeric: '#D4A017',
        chilli: '#7A1F1B',
        brown: '#5C4033',
      },
      fontFamily: {
        serif: ['"Playfair Display"', 'Georgia', 'Cambria', 'Times New Roman', 'serif'],
        sans: ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'sans-serif'],
      },
      boxShadow: {
        brand: '0 10px 40px -10px rgba(31, 59, 43, 0.25)',
      },
    },
  },
  plugins: [],
}
