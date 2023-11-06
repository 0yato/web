document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".slider");
    const slides = document.querySelectorAll(".slide");
    const slideCount = slides.length;
    let slideIndex = 0;
    let interval;
  
    function nextSlide() {
      slideIndex = (slideIndex + 1) % slideCount;
      updateSliderPosition();
    }
  
    function updateSliderPosition() {
      slider.style.transform = `translateX(-${slideIndex * 100}%)`;
    }
  
    function startSlider() {
      interval = setInterval(nextSlide, 3000); // Automatically advance the slider every 3 seconds
    }
  
    function stopSlider() {
      clearInterval(interval);
    }
  
    // Start the slider when the page loads
    startSlider();
  
    // Pause the slider when the user hovers over it
    slider.addEventListener("mouseenter", stopSlider);
  
    // Resume the slider when the user stops hovering
    slider.addEventListener("mouseleave", startSlider);
  });
  