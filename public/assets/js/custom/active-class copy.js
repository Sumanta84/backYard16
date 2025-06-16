// $( document ).ready(function() {
    // active bg-gradient-dark text-white
// });

document.addEventListener("DOMContentLoaded", function () {
    let navLinks = document.querySelectorAll(".side-nav-link");

    console.log(navLinks);

    navLinks.forEach(link => {
        // console.log(link);

        link.addEventListener("click", function (e) {
            // e.preventDefault();
            // console.log(this);

            // Remove active class from all links
            navLinks.forEach(nav => nav.classList.remove("active", "bg-gradient-dark", "text-white", "text-dark"));
            navLinks.forEach(nav => nav.classList.add("text-dark"));


            // // Add active class to clicked link
            this.classList.add("active", "bg-gradient-dark", "text-white");

            // // Store active link in localStorage
            localStorage.setItem("activeNav", this.href);
        });
    });
    // // Keep the active class on page reload
    let currentUrl = localStorage.getItem("activeNav");
    // console.log(currentUrl);

    if (currentUrl) {
        navLinks.forEach(link => {
            // console.log(link.href);
            // navLinks.forEach(nav => nav.classList.remove("active", "bg-gradient-dark", "text-white", "text-dark"));
            // navLinks.forEach(nav => nav.classList.add("text-dark"));
            if (link.href === currentUrl) {
                link.classList.add("active", "bg-gradient-dark", "text-white");
            }
        });
    }
});
