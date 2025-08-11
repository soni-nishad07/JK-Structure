


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bootstrap Background Slider</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.home_container {
  position: relative;
  height: 100vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  text-align: center;
}

/* Carousel fills screen */
.home_slider {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: 0;
}

.home_slider img {
  height: 100vh;
  object-fit: cover;
}

/* Hide carousel indicators */
.carousel-indicators {
  display: none !important;
}

/* Arrows styling - visible with red background */
.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-size: 100% 100%;
  background-color: rgba(255, 0, 0, 0.6);
  border-radius: 50%;
  width: 50px;
  height: 50px;
}

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l4 4-4 4-1.5-1.5 2.5-2.5-2.5-2.5L2.75 0z'/%3e%3c/svg%3e");
}

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

<div class="home_container">

  <!-- Bootstrap Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade home_slider" data-bs-ride="carousel" data-bs-interval="60000">
    
    <!-- Slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./Ongoing_project/1_Ambiant Maangalya Ashirvad/Ambiant.jpg" class="d-block w-100" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="./Ongoing_project/2_Hinduja Holdings/Hinduja (1).jpg" class="d-block w-100" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="./Ongoing_project/2_Hinduja Holdings/Hinduja (2).jpg" class="d-block w-100" alt="Slide 3">
      </div>
    </div>

    <!-- Arrows -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>

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
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const carouselElement = document.querySelector('#carouselExampleIndicators');
    new bootstrap.Carousel(carouselElement, {
        interval: 60000, // 1 minute
        ride: 'carousel'
    }); 
});
</script>

</body>
</html>
