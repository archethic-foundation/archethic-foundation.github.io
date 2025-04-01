document.addEventListener("DOMContentLoaded", function () {
    const headerUco = document.getElementById("header-uco");
    const ucoTokenTop = document.getElementById("uco-token-top");

    if (headerUco && ucoTokenTop) {
        window.addEventListener("scroll", function () {
            const sectionTop = ucoTokenTop.getBoundingClientRect().top;
            const sectionBottom = ucoTokenTop.getBoundingClientRect().bottom;

            if (sectionTop < window.innerHeight && sectionBottom > 0) {
                headerUco.style.display = "block";
            } else {
                headerUco.style.display = "none";
            }
        });
    }
});