window.onload = function() {
    const elements = document.querySelectorAll('.slide-in, .fade-in');
    elements.forEach((element) => {
        element.classList.add('visible');
    });
};
