const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                sans: [
                    'ヒラギノ角ゴシック',
                    '游ゴシック',
                    'メイリオ',
                    '游明朝',
                    'リュウミン',
                    'GEORGIA',
                    'Helvetica',
                    'Arial',
                    '"Noto Sans"',
                    '"Noto Serif"',
                    '"M Plus 1"',
                    '"Roboto"',
                    'Oswald',
                    'Montserrat',
                    ...defaultTheme.fontFamily.sans,
                ],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
