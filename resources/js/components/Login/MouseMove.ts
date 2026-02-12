// // Mobile menu toggle
// document.addEventListener("DOMContentLoaded", () => {
//     const btn = document.getElementById(
//         "mobile-menu-btn",
//     ) as HTMLButtonElement | null;
//     const menu = document.getElementById(
//         "mobile-menu",
//     ) as HTMLDivElement | null;

//     if (btn && menu) {
//         btn.addEventListener("click", () => {
//             menu.classList.toggle("hidden");
//         });
//     }
// });

document.addEventListener("DOMContentLoaded", function () {
    const blob = document.getElementById("cursor-blob");

    document.addEventListener("mousemove", function (e) {
        const x = e.clientX;
        const y = e.clientY;

        blob.style.left = x - 192 + "px";
        blob.style.top = y - 192 + "px";
    });
});
