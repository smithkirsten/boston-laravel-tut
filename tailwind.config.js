/** @type {import('tailwindcss').Config} */
export default {
  content: [
    //all files that use tailwind need to be referenced here
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        'primary-background': '#EFF2EB'
      }
    },
  },
  plugins: [],
}

