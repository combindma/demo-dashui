const colors = require('tailwindcss/colors')

export default {
    content: [
        './resources/views/**/*.blade.php',
        '../../Packages/dash-ui/resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        fontFamily: {
            sans: ['Inter', 'system-ui'],
        },
        fontSize: {
            xs: '0.75rem',
            sm: '0.8125rem',
            base: '0.875rem',
            lg: '1.25rem',
            xl: '1.5rem',
            '2xl': '1.875rem',
            '3xl': '2.25rem',
            '4xl': '3.052rem',
        },
        extend: {
            colors: {
                primary: colors.stone,
            },
            /*boxShadow: {
                '100': '0px_1px_0px_0px_rgba(26,26,26,0.07)',
                '200': '0px_3px_1px_-1px_rgba(26,26,26,0.07)',
                '300': '0px_4px_6px_-2px_rgba(26,26,26,0.20)',
                '400': '0px_8px_16px_-4px_rgba(26,26,26,0.22)',
                '500': '0px_12px_20px_-8px_rgba(26,26,26,0.24)',
                '600': '0px_20px_20px_-8px_rgba(26,26,26,0.28)',
            }*/
        }
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require("@tailwindcss/typography")
    ],
}
