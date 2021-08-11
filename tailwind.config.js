module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        //=========Container=========
        container: {
            center: true,
            padding: '1rem',
        },
        // ==========COLORS==========
        colors: {
            
        },
        //===========Font family==========
        fontFamily: {
            'limelight': 'Limelight',
            'roboto': 'Roboto',
            'josefin': 'Josefin Sans',
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    function ({addComponents}) {
        addComponents({
            '.container': {
                maxWidth: '100%',
                '@screen sm': {
                    maxWidth: '640px',
                },
                '@screen md': {
                    maxWidth: '768px',
                },
                '@screen lg': {
                    maxWidth: '1024px',
                },
                '@screen xl': {
                    maxWidth: '1280px',
                },
                '@screen 2xl': {
                    maxWidth: '1536px',
                },
            }
        })
    }
  ],
}
