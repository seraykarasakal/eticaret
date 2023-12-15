/** @type {import('tailwindcss').Config} */

export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                purple: "#7971ea",
                grey: "#25262a",
                "grey-1": "#8c92a0",
                "grey-2": "#212529",
                "grey-3": "#868995",
                "grey-4": "#706f6f",
                "black-1": "#25262a",

                violet: "rgb(109 40 217)",
            },
            keyframes: {
                fadeIn: {
                    "0%": { transform: "translate3d(0,40px,0)", opacity: 0 },
                    "100%": { transform: "translate3d(0,0,0)", opacity: 1 },
                },
                fadeRight: {
                    "0%": { transform: "translateX(100%)", opacity: 0 },
                    "100%": { transform: "translateX(0)", opacity: 1 },
                },
                fadeLeft: {
                    "0%": { opacity: 0, transform: "translateX(0)" },
                    "100%": { opacity: 1, transform: "translateX(100%)" },
                },
            },
            animation: {
                fadeIn: "fadeIn 1s ease-in-out", // '2s' animasyon süresini temsil eder
                fadeRight: "fadeRight 1s ease-in-out", // '2s' animasyon süresini temsil eder
                fadeLeft: "fadeLeft 1s ease-in-out",
            },
            backgroundImage: {
                "bg-1": "linear-gradient(to bottom, transparent 0%, transparent 18%, rgba(0, 0, 0, 0.8) 99%, rgba(0, 0, 0, 0.8) 100%)",
                tranasparent: "#00000000",
            },
            backgroundColor: {
                "bg-2": "#f8f9fa",
                "bg-3": "rgba(0, 0, 0, 0.6)",
            },
            lineHeight: {
                "line-1": "1.2",
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                ebgaramond: ["EB Garamond"],
            },
            screens: {
                "max-sm": { max: "479px" },
                "max-md": { max: "767px" },
                "max-lg": { max: "1023px" },
                "max-xl": { max: "1279px" },
                "max-2xl": { max: "1535px" },
            },
        },
    },
    plugins: [],
};
