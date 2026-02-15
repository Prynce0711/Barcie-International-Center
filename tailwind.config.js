/** @type {import('tailwindcss').Config} */
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            keyframes: {
                zoomSlow: {
                    "0%, 100%": { transform: "scale(1)" },
                    "50%": { transform: "scale(1.05)" },
                },
                fadeIn: {
                    "0%": { opacity: "0", transform: "translateY(20px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                slideInLeft: {
                    "0%": { opacity: "0", transform: "translateX(-50px)" },
                    "100%": { opacity: "1", transform: "translateX(0)" },
                },
                slideInRight: {
                    "0%": { opacity: "0", transform: "translateX(50px)" },
                    "100%": { opacity: "1", transform: "translateX(0)" },
                },
                scaleIn: {
                    "0%": { opacity: "0", transform: "scale(0.8)" },
                    "100%": { opacity: "1", transform: "scale(1)" },
                },
                fadeInUp: {
                    "0%": { opacity: "0", transform: "translateY(30px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                float: {
                    "0%, 100%": { transform: "translateY(0px)" },
                    "50%": { transform: "translateY(-10px)" },
                },
                backgroundZoom: {
                    "0%": { transform: "scale(1)" },
                    "100%": { transform: "scale(1.05)" },
                },
                blob: {
                    "0%, 100%": { transform: "translate(0,0) scale(1)" },
                    "33%": { transform: "translate(30px, -50px) scale(1.1)" },
                    "66%": { transform: "translate(-20px, 20px) scale(0.9)" },
                },
            },
            animation: {
                "fade-in": "fadeIn 1s ease-out",
                "slide-in-left": "slideInLeft 0.8s ease-out",
                "slide-in-right": "slideInRight 0.8s ease-out",
                "scale-in": "scaleIn 0.6s ease-out",
                "fade-in-up": "fadeInUp 1s ease-out",
                "zoom-slow": "zoomSlow 3s ease-in-out infinite",
                float: "float 3s ease-in-out infinite",
                "background-zoom":
                    "backgroundZoom 20s ease-in-out infinite alternate",
                blob: "blob 8s ease-in-out infinite",
            },
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: [
            {
                barcie: {
                    primary: "#1e3a8a",
                    secondary: "#6b21a8",
                    accent: "#0ea5a4",
                    neutral: "#111827",
                    "base-100": "#ffffff",
                    info: "#3b82f6",
                    success: "#16a34a",
                    warning: "#f59e0b",
                    error: "#ef4444",
                },
            },
            {
                mytheme: {
                    "base-100": "#1e293b",
                    "base-200": "#1e293b",
                    "base-300": "#1e293b",
                    "base-content": "#ffffff",
                },
            },
        ],
        darkTheme: "barcie",
    },
};
