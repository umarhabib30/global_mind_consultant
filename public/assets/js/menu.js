document.addEventListener("DOMContentLoaded", function () {
    const menuBtn = document.getElementById("mobile-menu-btn");
    const closeBtn = document.getElementById("close-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.remove("hidden");
    });

    closeBtn.addEventListener("click", () => {
        mobileMenu.classList.add("hidden");
    });

    // Auto-close menu when a link is clicked
    const links = mobileMenu.querySelectorAll("a");
    links.forEach((link) =>
        link.addEventListener("click", () => {
            mobileMenu.classList.add("hidden");
        })
    );
});
