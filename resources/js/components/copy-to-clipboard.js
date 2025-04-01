document.addEventListener("DOMContentLoaded", () => {
    // Check if the "airdrop-collapse" section exists in the DOM
    const airdropSection = document.getElementById("airdrop-collapse");

    if (airdropSection) {
        const input = document.getElementById("referral-link");
        const button = document.getElementById("copy-button");

        if (input && button) {
            button.addEventListener("click", () => {
                navigator.clipboard.writeText(input.value)
                    .then(() => {
                        // Update button content and classes
                        button.innerHTML = '<i class="bi bi-check me-2"></i>Link copied';
                        button.classList.add("btn-validated");
                        button.classList.remove("btn-secondary");

                        // Reset button state after 2 seconds
                        setTimeout(() => {
                            button.innerHTML = '<i class="bi bi-link-45deg me-2"></i>Copy Link';
                            button.classList.remove("btn-validated");
                            button.classList.add("btn-secondary");
                        }, 2000);
                    })
                    .catch(() => {
                        // Handle failure silently
                    });
            });
        }
    }
});