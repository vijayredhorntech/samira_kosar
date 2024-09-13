/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            primaryColor: '#ff6200',
            lightPrimary: '#fef2e9',
            black: '#000000',
            white: '#ffffff',
        },
    },
    plugins: [],
}
