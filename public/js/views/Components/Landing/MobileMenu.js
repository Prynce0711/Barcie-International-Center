"use strict";
// mobile-menu.ts
// Wait for the DOM to be fully loaded
document.addEventListener("DOMContentLoaded", () => {
    // Get button and menu elements
    const btn = document.getElementById("mobile-menu-btn");
    const menu = document.getElementById("mobile-menu");
    // Only add event listener if both elements exist
    if (btn && menu) {
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    }
});
