<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Custom Image Slider</title>
<style>

  .slider {
    position: relative;
    width: 100%;
    /* max-width: 900px; */
    margin: auto;
    overflow: hidden;

    position: relative;
  height: 100vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  text-align: center;
  }
  .slides {
    display: flex;
    transition: transform 0.6s ease-in-out;
    position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: 0;
  }
  .slides img {
    width: 100%;
    /* height: 500px; */
    object-fit: cover;
    flex-shrink: 0;
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
    z-index: 10;
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
    z-index: 20;
  }
  .prev:hover, .next:hover {
    background-color: rgba(255,0,0,1);
  }
  .prev { left: 10px; }
  .next { right: 10px; }


  
/* Overlay */
.home_overlay {
  background-color: rgba(0, 33, 71, 0.75);
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: 1;
}

/* Content */
.home_content {
  position: relative;
  z-index: 2;
  color: white;
  text-align: center;
}

.home_main-text {
  font-size: 5rem;
  font-weight: bold;
  margin-bottom: 20px;
}

.home_highlight {
  color: #00e0e0;
}

/* FUTURE TOGETHER text */
.home_fade-text {
  display: flex;
  gap: 5px;
  justify-content: center;
  font-size: 5rem;
  font-weight: 700;
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translate(-50%, -40%);
  white-space: nowrap;
  letter-spacing: 2px;
}

.home_fade-text span {
  color: rgba(255, 255, 255, 0.05);
  transition: color 0.4s ease;
}

.home_fade-text span:hover {
  background: linear-gradient(90deg, #0f2b5b, #00e0e0);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

/* Responsive */
@media (max-width: 768px) {
  .home_main-text {
    font-size: 2rem;
  }
  .home_fade-text {
    font-size: 2.5rem;
  }
}

@media (max-width: 480px) {
  .home_main-text {
    font-size: 1.5rem;
  }
  .home_fade-text {
    font-size: 2rem;
  }
}

</style>
</head>
<body>

<div class="slider">
  <div class="slides">
    <img src="./Ongoing_project/1_Ambiant Maangalya Ashirvad/Ambiant.jpg" alt="Slide 1">
    <img src="./Ongoing_project/2_Hinduja Holdings/Hinduja (1).jpg" alt="Slide 2">
    <img src="./Ongoing_project/2_Hinduja Holdings/Hinduja (2).jpg" alt="Slide 3">
  </div>

  <!-- Overlay stays on top -->
  <!-- <div class="overlay">Your Overlay Text Here</div> -->

    <!-- Overlay -->
    <div class="home_overlay"></div>

<!-- Content -->
<div class="home_content">
  <div class="home_main-text">
    <span class="home_highlight">BUILD THE</span>
  </div>
  <div class="home_fade-text">
    <span>FU</span><span>TU</span><span>RE</span>
    <span class="ps-3"></span>
    <span>TO</span><span>GE</span><span>TH</span><span>ER</span>
  </div>
</div>


  <!-- Navigation Arrows -->
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

  // Optional Auto Slide (change time if needed)
  setInterval(() => {
    showSlide(counter + 1);
  }, 5000);
</script>

</body>
</html>
