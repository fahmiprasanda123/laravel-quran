document.addEventListener('DOMContentLoaded', function () {
    const surahLinks = document.querySelectorAll('.surah-link');

    surahLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const surahNumber = this.getAttribute('data-surah-number');
            window.location.href = `/surah/${surahNumber}/quran-uthmani`;
        });
    });
});
