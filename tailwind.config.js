const defaultTheme = require('tailwindcss/defaultTheme');


module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        colors:{
            cWhite: '#FBFBFB',
            cBluishGray: '#CDD8DD',
            cLightBlue: '#25B8DE',
            cDarkBlue: '#0054A5',
            cBlack: '#3D3D3D',
            cLightGray: '#E7EBED',
            cDarkerGray: '#BFC9CE',
            cDarkerLightBlue: '#0091B7',
            cHomeGray: '#7A828A',
            cBlackHome: '#383530',
        },
        backgroundImage: {
            'bgSpace': "linear-gradient(195.99deg, #0C131B -57.79%, #0054A5 49.18%, #CDD8DD 151.55%)",
            'bgCloud': "radial-gradient(220.05% 220.05% at 50% -133.51%, #FFFFFF 62.51%, #0054A5 100%)",
            'bgNotifSuccess': "linear-gradient(90deg, #25B8DE 2.4%, #68E0FF 102.03%)",
            'bgNotifFailed': "linear-gradient(90deg, #E76857 0%, #FF9A8D 101%)",
         },
         boxShadow:{
             'bsRocket': "0px 0px 60px rgba(0, 0, 0, 0.1);",
             'bsBtn': "0px 4px 12px rgba(0, 0, 0, 0.12);",
             'bsFf': "5px 14px 15px 8px rgba(205, 205, 205, 0.25)",
             'bsFfhv': "0px 0px 8px rgba(55, 200, 238, 0.2)",
             'bsWhy': "4px 8px 20px 8px rgba(157, 157, 157, 0.3)"
         },
        extend: {
            fontFamily: {
                'sans': ['Poppins', 'sans-serif',
                '-apple-system',
                'BlinkMacSystemFont',
                '"Segoe UI"',
                'Roboto',
                '"Helvetica Neue"',
                'Arial',
                '"Noto Sans"',
                'sans-serif',
                '"Apple Color Emoji"',
                '"Segoe UI Emoji"',
                '"Segoe UI Symbol"',
                '"Noto Color Emoji"',],
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
