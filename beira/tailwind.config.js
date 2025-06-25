/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
  extend: {
    backgroundImage: {
      'beira': "url('/images/beira1.jpg')",
    },
  },
},

  plugins: [],
}
