/** @type {import('tailwindcss').Config} */
export default {
   content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
     screens: {
      'sm': '480px',  // Small devices
      'md': '768px',  // Medium devices
      'lg': '1024px', // Large devices
      'xl': '1280px', // Extra large devices
      '2xl': '1536px',// 2x extra large devices

      // Custom breakpoints
      'xxl': '1600px', // Extra extra large devices
      'tablet': '540px', // Custom breakpoint for tablets
      'phone': '400px', // Custom breakpoint for phones
    },
    extend: {},
  },
  plugins: [],
}

