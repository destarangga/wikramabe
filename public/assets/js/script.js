$(document).ready(function () {
    var slideIndex = 0;

    function showSlides() {
        var slides = $(".mySlides");
        for (var i = 0; i < slides.length; i++) {
            slides[i].classList.add("hidden");
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex - 1].classList.remove("hidden");
        setTimeout(showSlides, 5000); // Ganti 5000 dengan interval slide dalam milidetik (misalnya, 5000 untuk 5 detik)
    }

    showSlides();
});
