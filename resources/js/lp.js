// Boxs counter
document.addEventListener("DOMContentLoaded", function () {
    const supportersElement = document.getElementById("counter-supporters");
    const perSupporterElement = document.getElementById("counter-per-supporter");

    const supportersFinal = parseInt(supportersElement.innerText.replace(/[^0-9]/g, ''), 10);
    const perSupporterFinal = parseInt(perSupporterElement.innerText.replace(/[^0-9]/g, ''), 10);

    supportersElement.innerText = "0";
    perSupporterElement.innerText = "$0M";

    function animateValue(id, start, end, duration, prefix = "", suffix = "") {
        const element = document.getElementById(id);
        let startTime = null;
        function update(timestamp) {
            if (!startTime) startTime = timestamp;
            const progress = timestamp - startTime;
            const current = Math.floor((progress / duration) * (end - start) + start);
            element.innerText = prefix + Math.min(current, end).toLocaleString() + suffix;
            if (progress < duration) {
                requestAnimationFrame(update);
            }
        }
        requestAnimationFrame(update);
    }

    animateValue("counter-supporters", 0, supportersFinal, 1000, "", "");
    animateValue("counter-per-supporter", 0, perSupporterFinal, 1000, "$", "M");
});





// Landing Page Animations
const initAnimations = () => {
    // Add animation classes to elements when they come into view
    const animateOnScroll = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                animateOnScroll.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    // Animate elements with data-animate attribute
    document.querySelectorAll('[data-animate]').forEach(element => {
        animateOnScroll.observe(element);
    });
};





//Suscribe
const initForms = () => {
    document.querySelectorAll('form[data-ajax]').forEach(form => {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const submitButton = form.querySelector('[type="submit"]');
            const originalText = submitButton.textContent;

            try {
                // Désactivation du bouton et affichage de "Processing..."
                submitButton.disabled = true;
                submitButton.textContent = 'Processing...';

                // Préparation et envoi de la requête AJAX
                const formData = new FormData(form);
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();
                console.log('Réponse du serveur :', data);

                if (response.ok) {
                    // En cas de succès, remplace le contenu du formulaire par la success-box
                    form.innerHTML = `
              <div class="succes-box box-modal">
                ${data.message || 'Thank you for your submission!'}
              </div>
            `;
                } else {
                    throw new Error(data.message || 'Something went wrong');
                }
            } catch (error) {
                console.error('Erreur AJAX :', error);
                // En cas d'erreur, affiche ou mets à jour la warning-box
                let errorDiv = form.querySelector('.warning-box.box-modal');
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'warning-box box-modal mt-4';
                    form.appendChild(errorDiv);
                }
                errorDiv.textContent = error.message;

                // Réactive le bouton de soumission
                submitButton.disabled = false;
                submitButton.textContent = originalText;
            }
        });
    });
};

document.addEventListener('DOMContentLoaded', initForms);




// Smooth Scroll
const initSmoothScroll = () => {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
};




// Video Player
const initVideoPlayers = () => {
    document.querySelectorAll('[data-video-trigger]').forEach(trigger => {
        trigger.addEventListener('click', function () {
            const videoId = this.dataset.videoTrigger;
            const videoContainer = document.querySelector(`[data-video-container="${videoId}"]`);

            if (videoContainer) {
                const iframe = document.createElement('iframe');
                iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
                iframe.className = 'absolute inset-0 w-full h-full';
                iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
                iframe.allowFullscreen = true;

                videoContainer.innerHTML = '';
                videoContainer.appendChild(iframe);
            }
        });
    });
};




// Initialize all features
document.addEventListener('DOMContentLoaded', () => {
    initAnimations();
    initForms();
    initSmoothScroll();
    initVideoPlayers();
});

// Export functions for potential direct usage
export {
    initAnimations,
    initForms,
    initSmoothScroll,
    initVideoPlayers
};