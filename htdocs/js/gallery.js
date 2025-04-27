let slideIndex = 1;
  showSlides(slideIndex);

  function changeSlide(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let slides = document.getElementsByClassName("custom-slide");
    let thumbs = document.getElementsByClassName("custom-thumbnail");
    let caption = document.getElementById("custom-caption");

    if (n > slides.length) slideIndex = 1;
    if (n < 1) slideIndex = slides.length;

    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    for (let i = 0; i < thumbs.length; i++) {
      thumbs[i].classList.remove("custom-active-thumb");
    }

    slides[slideIndex - 1].style.display = "block";
    thumbs[slideIndex - 1].classList.add("custom-active-thumb");
    caption.textContent = thumbs[slideIndex - 1].alt;
  }