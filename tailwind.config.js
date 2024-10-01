import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                "primary-gradient":
                    "linear-gradient(0deg, #FCEED5 6%, #FCEED5 75%, #FFE7BA 100%)",
            },
            colors: {
                "text-primary": "#002A48",
                "light-gray": "#FCFCFC",
            },
            fontFamily: {
                gilroy: ["Gilroy", "sans-serif"],
            },
        },
    },

    plugins: [forms],
};
