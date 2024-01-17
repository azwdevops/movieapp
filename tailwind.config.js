/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            spinner: (theme) => ({
                default: {
                    color: "#dae1e7",
                    size: "2em",
                    border: "4px",
                    speed: "700ms",
                },
            }),
        },
    },
    plugins: [require("tailwindcss-spinner")()],
};
