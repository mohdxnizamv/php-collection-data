/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["**/*.php"],
  theme: {
    screens: {
      sm: "360px",
      md: "760px",
      lg: "1280px",
      xl: "1440px",
    },
    extend: {
      fontFamily: {
        Vampiro: ["Vampiro One", "cursive"],
        Inter: ["Inter", "sans-serif"],
      },
      colors: {
        softYellow: "#FFDE00",
        softBlue: "hsl(231, 69%, 60%)",
        softGray: "#E3E1E3",
        softGray1: "#888888",
        softRed: "hsl(0, 94%, 66%)",
        grayishBlue: "hsl(229, 8%, 60%)",
        veryDarkBlue: "hsl(229, 31%, 21%)",
      },
    },
  },
  plugins: [],
}
