const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/*.blade.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                // scriptina: ["scriptina", "Great Vibes"],
            },
            colors: {
                'black-pale':'rgba(0, 0, 0, 0.2)',
                'pinkish-tan':'#c8a482',
            },
            inset: {
                '17':'4.8rem',
            },
            height: {
                '98':'80rem',
            },
            margin: {
                '30': '7.4rem',
                '34': '8.5rem',
                '50': '12.5rem',
                '47': '11.7rem',
                '19': '4.7rem',
                '2' : '2.5px',
            },
            opacity:{
                '1': '0.01',
            },
            backgroundImage: {
                'model': "url('img/model.jpeg')",
            },
            inset: {
                '34':'8.5rem',
                '30':'7.3rem',
                '21':'5.5rem',
                '19': '4.7rem',
                '25': '6.5rem',
                '4': '0.80rem',
            },
            screens: {
                'miniphone':'300px',
                'laptop':'700px',
                'handphone':'400px',
                'tablet':'600px',
                'pc':'1400px',
                'mac':'1300px',
                'ultra':'4000px',
            },
            borderWidth: {
                '1': '1.2px',
            },
            zIndex: {
                '1': '2',
            },
        },
    },
    corePlugins: {
        // preflight: false,
      },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/typography'),
        // require('flowbite/plugin'),
    ],
};
