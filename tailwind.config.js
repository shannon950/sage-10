/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,.blade.php,vue,js}'],
  theme: {
    extend: {
      colors: {
        'black': '#000000',
        'blue': '#0072BC',
        'map-blue': '#0072BC',
        'map-grey': '#D9D9D9',
        'grey': '#767676', 
        // 'border-grey': '#E1E1E1',
        'white': '#FFFFFF',
      },
      fontFamily: {
        itc: ['ITC Avant Garde Gothic Pro', 'sans-serif'],
      },
      fontSize: {
        'xs': '0.5rem',  //9px
        'sm': '0.89rem', //16.02px
        'base': '1rem',  //18px
        'lg': '1.3rem',  //23.4px
        'xl': '1.6rem',  //28.8px
        '2xl': '1.75rem',  //32px
        'xxl': '2.2rem', //39.6px
        '2xxl': '3rem' //54px
      },
      lineHeight: {
        'snug': '1.2',
        'normal': '1.3',
        'relaxed': '1.4',
        'loose': '1.5',
      },
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1025px', 
    },
  },
  plugins: [],
};

export default config;
