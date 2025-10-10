const mobileMenuBtn = document.getElementById("mobile-menu-btn");
const mobileMenu = document.getElementById("mobile-menu");
const closeMenuBtn = document.getElementById("close-menu-btn");

mobileMenuBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("hidden");
});

closeMenuBtn.addEventListener("click", () => {
    mobileMenu.classList.add("hidden");
});
