const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            cursor: ['disabled'],
        },
    },
    "colors": {
        "def": {
            "50": "#7ee2f7",
            "100": "#74d8ed",
            "200": "#6acee3",
            "300": "#60c4d9",
            "400": "#56bacf",
            "500": "#4cb0c5",
            "600": "#42a6bb",
            "700": "#389cb1",
            "800": "#2e92a7",
            "900": "#24889d"
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
