module.exports = {
  theme: {
    extend: {
      colors: {
        brand: {
            50: '#f5ffff',
            100: '#b9ffc3',
            200: '#7deb87',
            300: '#69d773',
            400: '#55c35f',
            500: '#41AF4B',
            600: '#2d9b37',
            700: '#198723',
            800: '#005f00',
            900: '#003700',
        },
        mono: {
          100: '#E5E5E5',
          200: '#CCCCCC',
          300: '#B2B2B2',
          400: '#999999',
          500: '#807F7F',
          600: '#666666',
          700: '#4D4D4D',
          800: '#333333',
          900: '#1A1A1A',
        },
      },

      spacing: {
        "7": "1.75rem",
        "1/2": "50%",
        "1/3": "33.333337%",
        "2/3": "66.666667%",
        "1/4": "25%",
        "3/4": "75%",
        "1/5": "20%",
        "2/5": "40%",
        "3/5": "60%",
        "4/5": "80%",
        "1/6": "16.666667%",
        "5/6": "83.333333%",
        "1/12": "8.333333%",
        "5/12": "41.666667%",
        "7/12": "58.333333%",
        "11/12": "91.666667%",
        "9/16": "56.25%",
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms')
  ]
}
