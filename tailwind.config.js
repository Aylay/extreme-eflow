module.exports = {
  content: ["./**/*.php"],
  theme: {
    colors: {
      white: '#FFFFFF',
      black: '#000000',
      'heavy-metal': '#2A2B2A',
      'gallery': '#EAEAEA',
      'torch-red': '#FF133E'
    },
    fontFamily: {
      'base': ['Helvetica', 'Arial', 'sans-serif']
    },
    fontSize: {
      'h1': ['4.6rem', {
        lineHeight: '1.3'
      }],
      'h2': ['3rem', {
        lineHeight: '1.3'
      }],
      'h3': ['2.6rem', {
        lineHeight: '1.3'
      }],
      'h4': ['1.8rem', {
        lineHeight: '1.3'
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
        lineHeight: '1.3'
      }],
      'h1-m': ['2.8rem', {
        lineHeight: '1.3'
      }],
      'h2-m': ['2.2rem', {
        lineHeight: '1.3'
      }],
      'h3-m': ['1.8rem', {
        lineHeight: '1.3'
      }],
      'h4-m': ['1.6rem', {
        lineHeight: '1.3'
      }],
      'quote-m': ['2rem', {
        lineHeight: '1.3'
      }]
    },
    extend: {
      maxWidth: {
        '1176px': '117.6rem',
        '1512px': '151.2rem'
      },
      backgroundImage: {
        'text': 'linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), linear-gradient(45deg, #F8EB8C 0%, #D5F779 47.78%, #C2F8FC 100%)',
        'header': 'linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), linear-gradient(45deg, #F8EB8C 0%, #D5F779 47.78%, #C2F8FC 100%)',
        'airplane': 'url(../img/svg/airplane.svg)',
        'airplane-hover': 'url(../img/svg/airplane-hover.svg)',
        'form-check': 'url(../img/svg/form-check.svg)'
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
    'overflow-y-hidden'
  ],
  plugins: [],
}