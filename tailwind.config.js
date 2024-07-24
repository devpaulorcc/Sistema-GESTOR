/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './app/Views/**/*.{html,php,js}',
      './public/assets/**/*.{html,php,js}',
    ],
    theme: {
      extend: {},
    },
    plugins: [
      require('@tailwindcss/forms'),
    ],
  }
  