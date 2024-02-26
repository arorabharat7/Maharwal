/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {


      borderRadius: {
        'large': '56px',
      },
      
      colors: {
        'primary': '#38769D',
        'secondary': '#F4D2A8',
        'dark-grey': '#3C3C3C',
        'light-grey': '#41444B',
        'light-black': '#1C1C1C',
        'grey': '#545454',
      },
      container: {
        screens: {
          'xl': '1320px',
          'lg': '1024px',
          'lg-mini': '1080px',
          'md': '768px',
          'sm': '640px',

        },
      },

      padding: {
        '100': '6.25rem',
        '60': '3.75rem',
        '40': '2.50rem',
        
      },

      animation: {
        'spin-slow': 'spin 3s linear infinite',
      },

      margin:{
    'ml-96' : '48rem',
      },


      backgroundImage: {

        'gradient-linear': 'linear-gradient(90deg, rgba(55,104,144,1) 0%, rgba(55,104,144,1) 100%, rgba(58,123,163,1) 100%)',
      },

    
      letterSpacing: {
        widest: '0rem',
      },

      fontSize: {
        '9xl': '5.625rem',
      },
  


     
      backgroundSize: {
        'auto': 'auto',
        'cover': 'cover',
        'contain': 'contain',
        '50': '50%',
        '30': '30%',
      },


      backgroundPosition: {
   
        'right-5': 'center right 1.25rem',
     
      },

      
      boxShadow: {
        '3xl': '0px 0px 15px 0px rgba(0, 0, 0, 0.15)',
        '4xl': '0px 0px 15px 8px rgba(0, 0, 0, 0.15)',
      },

    },
  },
  plugins: [],
}



