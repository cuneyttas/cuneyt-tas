const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt',
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            fontSize: tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme))
        },
        screens: {
            'xs': '480px',
            'sm': '768px',
            'md': '992px',
            'lg': '1200px',
            'xl': '1440px',
            '2xl': '1680px'
        },
        fontFamily: {
			sans: ['Ubuntu', 'sans-serif'],
            // baslik: ['Stick No Bills', 'sans-serif']
		},
        colors: {
            'acik-mavi': '#6BB4D7',
            'yari-acik-mavi': '#439CC7',
            'mavi': '#2289BB',
            'yari-koyu-mavi': '#0774A9',
            'koyu-mavi': '#05567D',
            'acik-sari': '#FFDA78',
            'yari-acik-sari': '#FFCE4D',
            'sari': '#FFC224',
            'yari-koyu-sari': '#FFB800',
            'koyu-sari': '#C68F00',
            'acik-kirmizi': '#FF9478',
            'yari-acik-kirmizi': '#FF724D',
            'kirmizi': '#FF5224',
            'yari-koyu-kirmizi': '#FF3500',
            'koyu-kirmizi': '#C62900',
            'yazi-rengi': '#666666',
            'siyah': '#111827'
        }
    },
    plugins: [
        tailpress.tailwind,
        require('flowbite/plugin')
    ]
};
