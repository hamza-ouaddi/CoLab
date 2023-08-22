/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'black': '#111111',
        'gray':'#434343',
        'lightGray': '#BFBFBF',
        'darkBlue': '#1A1747',
        'purple': '#795FFC',
        'blue': '#2B4EFF',
        'lightPurple':'#E4DFFE',
        'lightBlue': '#D4DBFF',
        'lightBlue2': '#E5E9F5',
        'background': '#F1F3F6',
        'white': '#FFFFFF',
      },
    },
  },
  plugins: [],
}

