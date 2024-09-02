/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors:{
        'midnight-blue': '#0F1626',
        'gold': '#FFD700',
        'charcoal-blue' : '#363c4e',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}


