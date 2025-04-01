document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(function (element) {
    element.addEventListener('click', function (event) {
        event.preventDefault();

        var target = this.getAttribute('data-bs-target'); 
        var collapseElement = document.querySelector(target);

        collapseElement.addEventListener('shown.bs.collapse', function () {
            collapseElement.scrollIntoView({ behavior: 'smooth' });
        }, { once: true }); 
    });
});