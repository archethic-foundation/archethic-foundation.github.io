export function showSpinner(elements) {
    const spinner = '<div class="spinner-grow text-light" role="status"><span class="visually-hidden">Loading...</span></div>';
    Array.from(elements).forEach(element => {
        element.innerHTML = spinner;
    });
}

export function updateElements(elements, value, formatter = v => v) {
    Array.from(elements).forEach(element => {
        if (value === undefined || value === null || Number.isNaN(value)) {
            element.textContent = 'N/A';
        } else if (value === '___%') {
            element.textContent = '___%';
        } else {
            element.textContent = formatter(value);
        }
    });
}