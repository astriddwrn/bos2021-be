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
            },
        },
        colors:{
            cWhite: '#FBFBFB',
            cBluishGray: '#CDD8DD',
            cLightBlue: '#25B8DE',
            cDarkBlue: '#0054A5',
            cBlack: '#3D3D3D',
            cLightGray: '#E7EBED',
            cDarkerGray: '#BFC9CE',
            cDarkerLightBlue: '#0091B7',

        },
        backgroundImage: {
            'bgSpace': "linear-gradient(195.99deg, #0C131B -57.79%, #0054A5 49.18%, #CDD8DD 151.55%)",
            'bgCloud': " radial-gradient(220.05% 220.05% at 50% -133.51%, #FFFFFF 62.51%, #0054A5 100%)",
         },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
