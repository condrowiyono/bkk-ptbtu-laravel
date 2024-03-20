/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
      container: {
          center: true,
          padding: "2rem",
          screens: {
              "2xl": "1400px",
          },
      },
      extend: {
          backgroundImage: {
              "hero-ornament": "url('/ornament/square.svg')",
              "dot-ornament": "url('/ornament/dot.webp')",
              "card-linear":
                  "linear-gradient(146.63deg, rgba(2, 132, 199, .1) 1.32%, rgba(236, 254, 255, 0) 66%), linear-gradient(325.76deg, rgba(2, 132, 199, .2) 3.68%, rgba(236, 254, 255, 0) 66.89%)",
          },
          colors: {
              border: "hsl(var(--border))",
              input: "hsl(var(--input))",
              ring: "hsl(var(--ring))",
              background: "hsl(var(--background))",
              foreground: "hsl(var(--foreground))",
              primary: {
                  DEFAULT: "hsl(var(--primary))",
                  foreground: "hsl(var(--primary-foreground))",
              },
              secondary: {
                  DEFAULT: "hsl(var(--secondary))",
                  foreground: "hsl(var(--secondary-foreground))",
              },
              destructive: {
                  DEFAULT: "hsl(var(--destructive))",
                  foreground: "hsl(var(--destructive-foreground))",
              },
              muted: {
                  DEFAULT: "hsl(var(--muted))",
                  foreground: "hsl(var(--muted-foreground))",
              },
              accent: {
                  DEFAULT: "hsl(var(--accent))",
                  foreground: "hsl(var(--accent-foreground))",
              },
              popover: {
                  DEFAULT: "hsl(var(--popover))",
                  foreground: "hsl(var(--popover-foreground))",
              },
              card: {
                  DEFAULT: "hsl(var(--card))",
                  foreground: "hsl(var(--card-foreground))",
              },
          },
          borderRadius: {
              lg: "var(--radius)",
              md: "calc(var(--radius) - 2px)",
              sm: "calc(var(--radius) - 4px)",
          },
      },
  },
  plugins: [require("flowbite/plugin")],
};
