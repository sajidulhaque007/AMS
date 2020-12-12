module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    container: {
      center: true,
      padding: {
        default: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
      },
    },


    extend: {},
  },
  variants: {
     backgroundColor: ['responsive', 'hover', 'focus', 'active'],
  },
  plugins: [],
}
