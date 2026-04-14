document.addEventListener("DOMContentLoaded", () => {
    const bar = document.getElementById('progress-bar');

    let savedWidth = localStorage.getItem('progresoBarra');
    let currentWidth = savedWidth ? parseInt(savedWidth) : 0;

    bar.style.width = currentWidth + '%';

    window.increaseFill = function() {
        if (currentWidth < 100) {
            currentWidth += 5;
            if (currentWidth > 100) currentWidth = 100;

            bar.style.width = currentWidth + '%';

            localStorage.setItem('progresoBarra', currentWidth);
        }
    };
});