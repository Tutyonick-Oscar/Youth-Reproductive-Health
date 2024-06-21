/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    colors :{
      bg : '#141821',
      secodary : '#10212B',
      third : '#0D1A22',
      white : '#f5f5f5',
      accent1 : '#1e5e98',
      accent2 : '#0f0c29',
      red : 'crimson'
    },
    gradientColors :{
      accent1 : '#1e5e98',
      accent2 : '#0f0c29'
    },
    screens: {
      sm: "480px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
  },
    extend: {},
  },
  plugins: [],
}

