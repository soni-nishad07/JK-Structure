<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Custom Image Slider</title>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: Arial, sans-serif;
  }
  .slider {
    position: relative;
    width: 100%;
    max-width: 900px;
    margin: auto;
    overflow: hidden;
  }
  .slides {
    display: flex;
    transition: transform 1s ease-in-out;
    width: 100%;
  }
  .slides img {
    width: 100%;
    height: 500px;
    object-fit: cover;
  }
  /* Overlay content */
  .overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 24px;
    font-weight: bold;
    background: rgba(0, 0, 0, 0.4);
    padding: 10px 20px;
    border-radius: 8px;
  }
  /* Arrows */
  .prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(255,0,0,0.8);
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    font-size: 20px;
    border-radius: 50%;
    user-select: none;
  }
  .prev:hover, .next:hover {
    background-color: rgba(255,0,0,1);
  }
  .prev { left: 10px; }
  .next { right: 10px; }
</style>
</head>
<body>

<div class="slider">
  <div class="slides">
    <img src="./Ongoing_project/1_Ambiant Maangalya Ashirvad/Ambiant.jpg" alt="Slide 1">
    <img src="./Ongoing_project/2_Hinduja Holdings/Hinduja (1).jpg" alt="Slide 2">
    <img src="./Ongoing_project/2_Hinduja Holdings/Hinduja (2).jpg" alt="Slide 2">
  </div>
  <div class="overlay">Your Overlay Text Here</div>
  <button class="prev">&#10094;</button>
  <button class="next">&#10095;</button>
</div>

<script>
  const slides = document.querySelector('.slides');
  const images = document.querySelectorAll('.slides img');
  const prevBtn = document.querySelector('.prev');
  const nextBtn = document.querySelector('.next');

  let counter = 0;
  const totalSlides = images.length;

  function showSlide(index) {
    if (index < 0) {
      counter = totalSlides - 1;
    } else if (index >= totalSlides) {
      counter = 0;
    } else {
      counter = index;
    }
    slides.style.transform = `translateX(${-counter * 100}%)`;
  }

  prevBtn.addEventListener('click', () => {
    showSlide(counter - 1);
  });

  nextBtn.addEventListener('click', () => {
    showSlide(counter + 1);
  });

  // Optional auto-slide every 5s
  setInterval(() => {
    showSlide(counter + 1);
  }, 5000);
</script>

</body>
</html>
