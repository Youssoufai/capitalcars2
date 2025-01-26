import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                background: "var(--background)",
                foreground: "var(--foreground)",
                red: "#EA001E"
            },
            backgroundImage: {
                'hero': "linear-gradient(rgba(0, 0, 0, 0.623), rgba(0, 0, 0, 0.427)), url('/public/images/bg3.jpg')",
                'client': "linear-gradient(rgba(0, 0, 0, 0.623), rgba(0, 0, 0, 0.427)), url('/public/fact-bg.jpg')",

            },
            fontFamily: {
                parkinsans: ['Parkinsans', 'sans-serif'],
                raleway: ['Raleway', 'sans-serif'],
                yrsa: ['Yrsa', 'serif'],
            },
        },
    },
    plugins: [],
};
