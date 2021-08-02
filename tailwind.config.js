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
            cGray: '#DADEDF',
            cLighterGray: '#EFF3F4',
            cBlacker: '#2B2B2B',
            cBabyBlue: '#CCE4F9',
            cLighterBlue: '#3371AD',
            cLntBlue: '#37C8EE',
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
             'bsFfhv': "6px 12px 24px rgba(165, 165, 165, 0.4)",
             'bsWhy': "4px 8px 20px 8px rgba(157, 157, 157, 0.3)",
             'bsWhyhv': "0px 0px 40px rgba(55, 200, 238, 0.4)",
             'bsOc': "4px 8px 20px 8px rgba(157, 157, 157, 0.3)",
             'bsOcBig': "4px 16px 20px 8px rgba(205, 205, 205, 0.3)",
             'bsVideo': "4px 12px 28px 6px rgba(119, 119, 119, 0.3)"
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
