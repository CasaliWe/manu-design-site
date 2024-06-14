/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        rosa: "#EA3347",
        roxo: "#30134D",
      },
      screens: {
        sm: '480px',
        md: '768px',
        lg: '992px',
        xl: '1200px',
        xxl: '1500px',
      },
    },
  },
  plugins: [],
}