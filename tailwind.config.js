/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      '2xl': {'max': '1535px'},

      'xl': {'max': '1305px'},

      'lg': {'max': '1023px'},

      'md': {'max': '860px'},

      'sm': {'max': '599px'},
    },
    extend: {},
  },
  plugins: [],
}

