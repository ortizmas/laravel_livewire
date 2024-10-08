/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
        font: {
            sans: ['Segoa UI', 'sans-serif'],
        }
    },
  },
  plugins: [],
}

