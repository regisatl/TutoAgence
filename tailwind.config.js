/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    darkMode: "class",
    theme: {
        extend: {},
        colors: {
            transparent: "transparent",
            current: "currentColor",
            slate: colors.slate,
            white: colors.white,
            gray: colors.gray,
            emerald: colors.emerald,
            indigo: colors.indigo,
            yellow: colors.yellow,
            amber: colors.amber,
            orange: colors.orange,
            red: colors.red,
            green: colors.green,
            teal: colors.teal,
            blue: colors.blue,
        }
    },
    fontFamily: {
        body: ["Poppins"],
        sans: ["Inter", "Roboto", "Helvetica Neue"],
    },
    plugins: [
        require('flowbite/plugin')
    ],
};
