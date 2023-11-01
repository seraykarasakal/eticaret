/** @type {import('tailwindcss').Config} */

export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    "./resources/**/*.blade.php",
    "./node_modules/flowbite/**/*.js"
,

  ],
  theme: {
    extend: {
      colors:{
        'purple' :'#7971ea',
        'grey' : '#25262a',
        'grey-1': '#8c92a0',
        'grey-2' : '#212529',
        'black-1': '#25262a',
        'violet': 'rgb(109 40 217)',
        
      },
      keyframes: {
        fadeIn: {
          '0%': { transform: 'translate3d(0,40px,0)', opacity: 0 },
          '100%': { transform: 'translate3d(0,0,0)', opacity: 1 },
        },
        fadeLeft: {
          '0%': { transform: 'translate3d(0,40px,0)', opacity: 0 },
          '100%': { transform: 'translate3d(0,0,0)', opacity: 1 },
        },
      },
      animation: {
        'fadeIn': 'fadeIn 1s ease-in-out', // '2s' animasyon süresini temsil eder
        'fadeLeft': 'fadeLeft 1s ease-in-out', // '2s' animasyon süresini temsil eder

      },
      backgroundImage:{
        'bg-1': 'linear-gradient(to bottom, transparent 0%, transparent 18%, rgba(0, 0, 0, 0.8) 99%, rgba(0, 0, 0, 0.8) 100%)',
        'tranasparent': '#00000000',
      },
      backgroundColor:{
        'bg-2': '#f8f9fa',
        'bg-3' :'rgba(0, 0, 0, 0.6)'
      },
      lineHeight:{
        'line-1':'1.2',
      },
      fontFamily: {
        poppins: ['Mukta', 'sans-serif'],
      },
    },
  },
  plugins: [

  ],
}

