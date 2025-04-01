document.addEventListener("DOMContentLoaded", function () {
    // Retrieve the Sticky Top Bar element and the collapsibles
    const stickyTopBar = document.getElementById("stickyTopBar");
    const collapsibleSections = document.querySelectorAll(".accordion-collapse");
    const airdropSection = document.getElementById("airdrop-collapse");

    // Only execute if the airdrop section exists
    if (stickyTopBar && airdropSection) {
        // Function to check if an element is partially or fully visible in the viewport
        function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top < window.innerHeight &&
                rect.bottom > 0
            );
        }

        // Function to handle the visibility of the Sticky Top Bar
        function handleStickyVisibility() {
            let isAnyCollapsibleVisible = false;

            // Check if at least one collapse is visible
            collapsibleSections.forEach((section) => {
                if (isElementInViewport(section)) {
                    isAnyCollapsibleVisible = true;
                }
            });

            // Show or hide the Sticky Top Bar
            if (isAnyCollapsibleVisible) {
                stickyTopBar.classList.remove("d-none");
                stickyTopBar.classList.add("d-flex");
            } else {
                stickyTopBar.classList.add("d-none");
                stickyTopBar.classList.remove("d-flex");
            }
        }

        // Scroll event to handle visibility
        window.addEventListener("scroll", handleStickyVisibility);

        // Initially check the state
        handleStickyVisibility();
    }
});