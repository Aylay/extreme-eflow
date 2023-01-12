module.exports = {
  content: ["./**/*.php"],
  theme: {
    colors: {
      white: '#FFFFFF',
      black: '#000000',
      'heavy-metal': '#2A2B2A',
      'gallery': '#EAEAEA'
    },
    fontFamily: {
      'base': ['Helvetica', 'Arial', 'sans-serif']
    },
    fontSize: {
      'h1': ['4.6rem', {
        lineHeight: '1.3',
        fontWeight: '700'
      }],
      'h2': ['3rem', {
        lineHeight: '1.3',
        fontWeight: '700'
      }],
      'h3': ['2.6rem', {
        lineHeight: '1.3',
        fontWeight: '700'
      }],
      'h4': ['1.8rem', {
        lineHeight: '1.3',
        fontWeight: '700'
      }],
      'm': ['1.6rem', {
        lineHeight: '1.3'
      }],
      's': ['1.2rem', {
        lineHeight: '1.3'
      }],
      'xs': ['1rem', {
        lineHeight: '1.3'
      }],
      'xxs': ['.7rem', {
        lineHeight: '1.3'
      }],
      'quote': ['2.4rem', {
        lineHeight: '1.3'
      }],
      'cta2': ['1.4rem', {
        lineHeight: '1.3',
        fontWeight: '700'
      }]
    },
    extend: {
      maxWidth: {
        '1176px': '117.6rem',
        '1512px': '151.2rem'
      },
      backgroundImage: {
        'text': 'linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), linear-gradient(45deg, #F8EB8C 0%, #D5F779 47.78%, #C2F8FC 100%)',
        'header': 'linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), linear-gradient(45deg, #F8EB8C 0%, #D5F779 47.78%, #C2F8FC 100%)'
      }
    },
  },
  safelist: [
    'grid-cols-2',
    'grid-cols-3',
    'grid-cols-4',
    'grid-cols-5',
    'grid-cols-6',
    'grid-cols-7',
    'grid-cols-8',
    'grid-cols-9',
    'grid-cols-10',
  ],
  plugins: [],
}