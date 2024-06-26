import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                lato: ['Lato', 'sans-serif'],
            },
            spacing: {
                '0.05/10': '0.5%',
                '0.1/10': '1%',
                '0.3/10': '3%',
                '0.5/10': '5%',
                '0.7/10': '7%',
                '0.8/10': '8%',
                '0.9/10': '9%',
                '1/10': '10%',
                '1.2/10': '12%',
                '1.55/10': '15.5%',
                '8.45/10': '84.5%',
                '8.8/10': '88%',
                '8.85/10': '88.5%',
                '9/10': '90%',
                '9.1/10': '91%',
                '9.2/10': '92%',
                '9.7/10': '97%',
                '9.92/10': '99.2%',
                 
            },
        },
    },

    plugins: [forms],
};
