document.addEventListener('DOMContentLoaded', () => {
    const videoElements = document.querySelectorAll('.cold-wallet-video');

    if (videoElements.length === 0) {
        return;
    }

    const isSafari = navigator.userAgent.includes("Safari") && !navigator.userAgent.includes("Chrome");

    if (isSafari) {
        videoElements.forEach(videoElement => {
            // Create an <img> element as a replacement for the video
            const imgElement = document.createElement('img');
            imgElement.src = videoElement.getAttribute('poster'); // Use the poster as the image source
            imgElement.alt = videoElement.getAttribute('aria-label') || "3D animation showcasing Archethic Cold Wallet";
            imgElement.className = videoElement.className; // Copy the video element's classes

            // Replace the video element with the image element
            videoElement.parentNode.replaceChild(imgElement, videoElement);
        });

    } else {
    }
});