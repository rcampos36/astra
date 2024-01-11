/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        'yinmn-blue': '#26547C',
        'sky-blue': '#85C7DE',
        'bright-pink-crayola': '#ef476f',
        'sunglow': '#ffd166',
        'emerald': '#06d6a0',
        'purple': '#731963',
        'off-white': '#fcfcfc',
        'french-gray': '#C1CAD6',
        'body-color': '#f8f8f8',
        'celestial-blue': '#058ED9',
        'giant-orange': '#F46036',
        'persina-blue': '#2541B2',
    },
      fontFamily: {
        barlow:['"Barlow"', "sans-serif"],
      },
    },
  },
  plugins: [],
};

export default config;
