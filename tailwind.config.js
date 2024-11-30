/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './src/**/*.php', // Adjust based on your file structure
    './public/**/*.html', // If using static HTML files
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};

