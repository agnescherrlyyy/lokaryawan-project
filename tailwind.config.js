/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/views/admin-hr/**/*.blade.php",
    "./resources/js/**/*.js",
    "./resources/js/**/*.jsx",
    "./resources/js/**/*.vue",
  ],
  darkMode: 'class',
    theme: {
        extend: {
            fontFamily : {
              'Poppins': ['Poppins', 'sans-serif'],
            },
            colors:{
              'natural': {
                20: '#fafafa',
                40: '#f5f5f5',
                60: '#d6d6d6',
                80: '#757575',
                100: '#1c1c1c',
              },
              'primer':{
                20: '#eefbf5',
                40: '#45ad8d',
                60: '#169870',
                80: '#107254',
                100: '#0b4c38',
              },
              'sekunder':{
                20: '#fffbeb',
                40: '#f5b247',
                60: '#F39F19',
                80: '#b67713',
                100: '#7a500d',
              },
              'informasi':{
                20: '#eef7ff',
                40: '#86c8ff',
                60: '#2485ff',
                80: '#0647e0',
                100: '#113997',
              },
              'peringatan':{
                20: '#fefde8',
                40: '#f5d819',
                60: '#e5bf0d',
                80: '#c69508',
                100: '#9e6b0a',
              },
              'sukses':{
                20: '#effbea',
                40: '#8be076',
                60: '#3fa72a',
                80: '#286e1d',
                100: '#204b1c',
              },
              'background-body':{
                100: '#F4F6FA',
              },
            },
        },
    },
  plugins: [],
}

