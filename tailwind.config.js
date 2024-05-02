const plugin = require('tailwindcss/plugin')

/** @type {import('tailwindcss').Config} */
module.exports = {
    // mode: 'jit',
    content: [
        "./resources/**/*.{js,css}",
        "./**/*.php"
    ],
    darkMode: 'class',
    theme: {
        /*fontFamily: {
            'body': ['Basic', 'system-ui'],
        },*/
        colors: {
            'dark': '#1C1320',
            'background-100': '#1C1320',
            'black': '#1A181B',
            'violet': '#564D65',
            'timberwolf': '#D7CDCC',
            'white': '#FFFFFF',
            'white-25': '#FFFFFF40',
            'white-65': '#FFFFFFA6',
            'white-80': '#FFFFFFCC',
            'light-100': '#DCC8C6',
            'yellow': '#F1D302',
            'accent-65': '#FFE768A6',
            'accent-100': '#FFE768',
            'gray-65': '#3D298BA6',
            'gray-25': '#3D298B40',
            'gray-100': '#3D298B',
        }
    },
    plugins: [
        plugin(function ({addBase, theme}) {
            addBase({
                'body': {background: theme('colors.dark'), color: theme('colors.white')},
                /*'nav': {},
                'footer': {},
                */
                'p': {
                    marginTop: '0.5rem'
                },
            })
        })
    ],
}