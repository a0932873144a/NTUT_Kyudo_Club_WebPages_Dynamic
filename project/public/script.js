function toggleMenu() {
    var x = document.querySelector("header ul");
    if (x.style.display === "block" || x.style.display === "") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

var currentSlideIndex = 1;
var totalSlides = 5;

function moveToNextSlide() {
    currentSlideIndex++;
    if (currentSlideIndex > totalSlides) {
        currentSlideIndex = 1;
    }
    
    var nextSlideButtonId = "nextSlide" + currentSlideIndex;
    document.getElementById(nextSlideButtonId).click();
}

setInterval(moveToNextSlide, 2000); // Change slide every 4000 milliseconds


