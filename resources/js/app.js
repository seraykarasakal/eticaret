import "./bootstrap";
const closeBtn = document.getElementById("close");
const mobileMenu = document.getElementById("mobile-menu");
const hamburger = document.getElementById("hamburger");

function noscroll() {
    window.scrollTo(0, 0);
}
closeBtn.addEventListener("click", () => {
    mobileMenu.style.display = "none";

    window.removeEventListener("scroll", noscroll);
});

hamburger.addEventListener("click", () => {
    mobileMenu.style.display = "block";
    window.addEventListener("scroll", noscroll);
});
