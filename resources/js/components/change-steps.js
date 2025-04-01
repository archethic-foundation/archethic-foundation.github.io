document.addEventListener("DOMContentLoaded", function () {

    const stickyTopBar = document.getElementById("stickyTopBar");
    const collapsibleSections = document.querySelectorAll(".accordion-collapse");
    const currentStepElement = document.getElementById("currentStep");

    if (!stickyTopBar) {
        return;
    }

    if (collapsibleSections.length === 0) {
        return;
    }

    // Function to update the step number
    function updateStepNumber() {
        collapsibleSections.forEach((section, index) => {
            if (section.classList.contains("show")) { // Checks if the collapse is open
                const stepNumber = index + 1; // Indexes start at 0, so we add 1
                currentStepElement.textContent = stepNumber;
            }
        });
    }

    // Add events to detect state changes of the collapsibles
    collapsibleSections.forEach((section) => {
        section.addEventListener("shown.bs.collapse", updateStepNumber); // When a section is opened
        section.addEventListener("hidden.bs.collapse", updateStepNumber); // When a section is closed
    });

    // Update initially to reflect the default state
    updateStepNumber();
});