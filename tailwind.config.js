import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
    ],
    safelist: [],
    darkMode: "class",
    theme: {
        extend: {
            container: {
                center: true,
                padding: "1rem",
            },
        },
    },
    plugins: [forms],
};
