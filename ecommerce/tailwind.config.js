const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/*.blade.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'black-pale':'rgba(0, 0, 0, 0.2)',
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
            },
            opacity:{
                '1': '0.01',
            },
            backgroundImage: {
                'model': "url('img/model.jpeg')",
            },
            inset: {
                '34':'8.5rem',
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/typography')
    ],
};
