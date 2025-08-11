<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Title Tag -->
  <title>About JKStructure | Experienced Construction Company & Builders</title>

  <!-- Meta Description -->
  <meta name="description" content="Learn more about JKStructure, a construction company with decades of experience and a commitment to quality and client satisfaction. Discover the expertise and dedication to building excellence." />

  <!-- SEO Keywords -->
  <meta name="keywords" content="construction company history, expertise, values, mission, vision, team" />

  <!-- Favicon -->
  <link rel="icon" href="/favicon.ico" type="image/x-icon" />

  <!-- Canonical -->

  <!-- Open Graph -->
  <meta property="og:title" content="About JKStructure | Experienced Construction Company & Builders" />
  <meta property="og:description" content="Learn more about JKStructure, a construction company with decades of experience and a commitment to quality and client satisfaction." />
  <meta property="og:type" content="website" />


  <?php include('link.php'); ?>

</head>

<body>

  <?php include('nav.php'); ?>


  <!-- <div class="home_container">
    <div class="home_overlay"></div>
    <div class="home_content">
      <div class="home_main-text">
        <span class="home_highlight">JK CONSTRUCTION</span>
      </div>
      <p>Leading multi-disciplinary civil engineering consultancy with over a decade of excellence</p>
    </div>
  </div> -->






  
  <div class="slider">

  <div class="slides">

    <img src="./Ongoing_project/2_Hinduja Holdings/Hinduja (1).jpg" alt="Slide 2">
    <img src="./Ongoing_project/2_Hinduja Holdings/Hinduja (3).jpg" alt="Slide 3">    
    <img src="./Ongoing_project/2_Hinduja Holdings/Hinduja (2).jpg" alt="Slide 3">
    <img src="./Ongoing_project/2_Hinduja Holdings/Hinduja (4).jpg" alt="Slide 4">
    <img src="./Ongoing_project/3_Skav developers put Ltd/Skav.jpg" alt="Slide 5">
    <img src="./Ongoing_project/4_woodsvale/Woodsvale (1).jpg" alt="Slide 6">
    <img src="./Ongoing_project/4_woodsvale/Woodsvale (2).jpg" alt="Slide 7">
    <img src="./Ongoing_project/4_woodsvale/Woodsvale (3).jpg" alt="Slide 8">
    <img src="./Ongoing_project/1_Ambiant Maangalya Ashirvad/Ambiant.jpg" alt="Slide 1">
    
  </div>


    <!-- Overlay -->
    <div class="home_overlay"></div>

<!-- Content -->
<div class="home_content">
  <div class="home_main-text">
    <span class="home_highlight">JK CONSTRUCTION</span>
  </div>
  <p>Leading multi-disciplinary civil engineering consultancy with over a decade of excellence</p>

</div>


  <!-- Navigation Arrows -->
  <button class="prev">&#10094;</button>
  <button class="next">&#10095;</button>
</div>





  <section class="about_section">
    <div class="about_text">
      <h2>Our Story</h2>
      <p>
        JK Structure is a leading multi-disciplinary civil engineering consultancy dedicated to delivering innovative, sustainable, and high-quality solutions across the building and infrastructure sectors. With a strong foundation in building architecture, structural design, and construction, we combine technical expertise with creative vision to bring every project to life.
      </p>
      <p>
        Founded with the mission to transform spaces and communities, JK Structure has successfully executed projects ranging from residential buildings and commercial complexes to industrial facilities and institutional structures. Our integrated approach ensures seamless collaboration between architects, structural engineers, and construction specialists resulting in efficient, safe, and aesthetically compelling outcomes.
      </p>
    </div>
    <div class="about_image">
      <!-- <img src="./images/jk-model.png" alt="JK Structure Model"> -->
           <video autoplay muted loop playsinline>
      <source src="./images/our_story.mp4" type="video/mp4">
    </video>
    </div>
  </section>


  <!-- -------------------------- -->


  <div class="about_journy_container">
    <h2 class="about_journy_heading">Our Journey</h2>
    <p class="about_journy_subheading">Milestones that define our growth and commitment to excellence</p>

    <div class="about_journy_timeline">

      <div class="about_journy_item left">
        <div class="about_journy_card">
          <div class="about_journy_year">2010</div>
          <div class="about_journy_title">Civil & Structural Engineering</div>
          <div class="about_journy_desc">JK Structure established with a vision to transform spaces and communities</div>
        </div>
      </div>

      <div class="about_journy_item right">
        <div class="about_journy_card">
          <div class="about_journy_year">2015</div>
          <div class="about_journy_title">First Major Project</div>
          <div class="about_journy_desc">Completed our first large-scale commercial complex project</div>
        </div>
      </div>

      <div class="about_journy_item left">
        <div class="about_journy_card">
          <div class="about_journy_year">2018</div>
          <div class="about_journy_title">Team Expansion</div>
          <div class="about_journy_desc">Expanded our team with specialized engineers and consultants</div>
        </div>
      </div>

      <div class="about_journy_item right">
        <div class="about_journy_card">
          <div class="about_journy_year">2020</div>
          <div class="about_journy_title">Green Building Focus</div>
          <div class="about_journy_desc">Integrated sustainable design and green building solutions</div>
        </div>
      </div>

      <div class="about_journy_item left">
        <div class="about_journy_card">
          <div class="about_journy_year">2024</div>
          <div class="about_journy_title">500+ Projects</div>
          <div class="about_journy_desc">Reached milestone of over 500 successfully completed projects</div>
        </div>
      </div>

    </div>
  </div>



    <!-- ------------------------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  
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


  <?php include('footer.php'); ?>

</body>

</html>