export function showSpinner(elements) {
    const spinner = '<div class="spinner-grow text-light" role="status"><span class="visually-hidden">Loading...</span></div>';
    Array.from(elements).forEach(element => {
        element.innerHTML = spinner;
    });
}

export function updateElements2(elements, value, formatter = v => v, useHTML = false) {
    Array.from(elements).forEach(element => {
        if (value === undefined || value === null || Number.isNaN(value)) {
            element.textContent = 'N/A';
        } else if (value === '___%') {
            element.textContent = '___%';
        } else {
       


            if (useHTML) {
                element.innerHTML = output;
            } else {
                element.textContent = formatter(value);
            }





        }
    });
}

export function updateElements(elements, value, formatter = v => v, useHTML = false) {
    // Vérifie que formatter est bien une fonction, sinon le remplace
    if (typeof formatter !== "function") {
        formatter = v => v;
    }

    Array.from(elements).forEach(element => {
        let output;

        if (value === undefined || value === null || Number.isNaN(value)) {
            output = 'N/A';
        } else if (value === '___%') {
            output = '___%';
        } else {
            output = formatter(value);
        }

        if (useHTML) {
            element.innerHTML = output;
        } else {
            element.textContent = output;
        }
    });
}