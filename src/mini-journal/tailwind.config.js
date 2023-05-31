import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
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

    plugins: [forms],
};
