import "./bootstrap";
import "flowbite";

// Script Hilang Muncul - Navbar
const navbar = document.getElementById("navbar");
const navbarContent = document.getElementById("navbarContent");

if (navbar && navbarContent) {
    window.addEventListener("scroll", function () {
        if (window.scrollY === 0) {
            // Posisi paling atas → padding besar
            navbarContent.classList.remove("p-5");
            navbarContent.classList.add("p-8");
        } else {
            // Posisi scroll → padding lebih kecil
            navbarContent.classList.remove("p-8");
            navbarContent.classList.add("p-5");
        }
    });

    let lastScrollTop = 0;
    const scrollThreshold = 600;

    window.addEventListener("scroll", function () {
        let scrollTop =
            window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > 0) {
            navbar.classList.add("shadow-md");
        } else {
            navbar.classList.remove("shadow-md");
        }

        if (scrollTop > scrollThreshold) {
            if (scrollTop > lastScrollTop) {
                // Scroll Down
                navbar.style.top = "-160px";
                navbar.style.transition = "top 0.4s ease";
            } else {
                // Scroll Up
                navbar.style.top = "0";
                navbar.style.transition = "top 0.4s ease";
            }
        } else {
            // Dalam threshold, navbar tetap visible
            navbar.style.top = "0";
        }

        lastScrollTop = scrollTop;
    });
}
