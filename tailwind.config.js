/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
      './storage/framework/views/*.php',
      './resources/views/**/*.blade.php',
      './node_modules/tw-elements/dist/js/**/*.js',
  ],
  theme: {
      borderWidth: {
          DEFAULT: '1px',
          '0': '0',
          '2': '2px',
          '3': '3px',
          '4': '4px',
          '6': '6px',
      },
          extend: {},
  },
  plugins: [
      require("tw-elements/dist/plugin"),
      require('flowbite/plugin')
  ],
}
