/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php'
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#235f8b',
          50: '#f2f6f9',
          100: '#e6eff6',
          200: '#bfdff0',
          300: '#99cfea',
          400: '#4da8dc',
          500: '#235f8b',
          600: '#1e4b6f',
          700: '#17354f',
          800: '#112638',
          900: '#0b1722'
        },
        secondary: {
          DEFAULT: '#16a34a',
          50: '#ecfbef',
          100: '#dff6df',
          200: '#bff0bf',
          300: '#9fe99f',
          400: '#6fe46f',
          500: '#16a34a',
          600: '#13863f',
          700: '#0f6b33',
          800: '#0b4f27',
          900: '#07361a'
        }
      },
      fontFamily: {
        display: ['"Abril Fatface"', 'cursive'],
        playfair: ['"Playfair Display"', 'serif'],
        bebas: ['"Bebas Neue"', 'cursive'],
        sans: ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', '"Segoe UI"', 'Roboto', '"Helvetica Neue"', 'Arial', '"Noto Sans"', 'sans-serif']
      }
    }
  },
  plugins: []
}
