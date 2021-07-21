const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                // 'montserrat': ['Montserrat'],
                'cuprum': ['Cuprum'],
                'rochester': ['Rochester'],
            },
            colors:
            {
                'viamed': {
                    '50': '#75E2FA',
                    '100': '#5CDCF9',
                    '200': '#2BD2F7',
                    '300': '#09BEE6',
                    '400': '#0796B5',
                    '500': '#056D84',
                    '600': '#034453',
                    '700': '#011C22',
                    '800': '#000000',
                    '900': '#000000'
                        },
            },
            container: {
                center: true,
              },

            height: {
                116: "29rem",
                /*464px*/
                125: "31.25rem",
                /*500px*/
                140: "35rem",
                /*560px*/
                150: "37.5rem",
                /*600px*/
                200: "50rem",
                /*800px*/
                250: "62.5rem",
                /*800px*/
            },

        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
