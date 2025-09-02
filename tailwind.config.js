import defaulthTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaulthTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
}