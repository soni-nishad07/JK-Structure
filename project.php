<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <!-- Title Tag -->
  <title>Our Construction Projects | Residential & Commercial Portfolio | JKStructure</title>

  <!-- Meta Description -->
  <meta name="description" content="Browse JKStructure's portfolio of completed construction projects. See the quality craftsmanship and diverse range of residential and commercial builds. View the gallery!">

  <!-- Target Keywords -->
  <meta name="keywords" content="Construction projects, portfolio, completed projects, residential projects, commercial projects, project gallery">

  <!-- Author -->
  <meta name="author" content="JKStructure">

  <!-- Canonical URL -->

  <!-- Open Graph for Social Sharing -->
  <meta property="og:title" content="Our Construction Projects | Residential & Commercial Portfolio | JKStructure" />
  <meta property="og:description" content="Explore JKStructure's completed construction projects including residential and commercial builds. View our project gallery and experience our quality work." />
  <meta property="og:type" content="website" />

  

  <?php include('link.php'); ?>

</head>

<body>

  <?php include('nav.php'); ?>





  <div class="project_container">

    <!-- Tabs -->
    <div class="project_tabs">
      <button class="project_tab active" data-type="all">All Projects</button>
      <button class="project_tab" data-type="residential">Residential</button>
      <button class="project_tab" data-type="commercial">Commercial</button>
      <button class="project_tab" data-type="industrial">Industrial</button>
    </div>

    <!-- Projects Grid -->
    <div class="project_grid">

      <!-- Project 1 -->
      <div class="project_card" data-type="residential">
        <img src="./images/Embassy.png" alt="Embassy Grove">
        <div class="project_content">
          <div class="project_title">Embassy Grove</div>
          <div class="project_desc">Modern tech park with sustainable design features and state-of-the-art infrastructure.</div>
          <div class="project_info"><i class="fas fa-map-marker-alt"></i> Bangalore, Karnataka</div>
          <div class="project_info"><i class="fas fa-calendar-alt"></i> 2023 • 2.5 Lakh Sq.ft</div>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="project_card" data-type="residential">
        <img src="./images/Heritage.png" alt="Heritage Real Estate">
        <div class="project_content">
          <div class="project_title">Heritage Real Estate</div>
          <div class="project_desc">Luxury residential complex with green building certification and modern amenities.</div>
          <div class="project_info"><i class="fas fa-map-marker-alt"></i> Whitefield, Bangalore</div>
          <div class="project_info"><i class="fas fa-calendar-alt"></i> 2022 • 1.8 Lakh Sq.ft</div>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="project_card" data-type="industrial">
        <img src="./images/Indrapratha.png" alt="Indrapratha Ruhe">
        <div class="project_content">
          <div class="project_title">Indrapratha Ruhe</div>
          <div class="project_desc">Large-scale manufacturing facility with advanced automation and safety systems.</div>
          <div class="project_info"><i class="fas fa-map-marker-alt"></i> Hosur, Tamil Nadu</div>
          <div class="project_info"><i class="fas fa-calendar-alt"></i> 2022 • 5 Lakh Sq.ft</div>
        </div>
      </div>

      <!-- Project 4 -->
      <div class="project_card" data-type="commercial">
        <img src="./images/RGE.png" alt="RGE Construction">
        <div class="project_content">
          <div class="project_title">RGE Construction</div>
          <div class="project_desc">Modern educational facility with sustainable design and advanced learning infrastructure.</div>
          <div class="project_info"><i class="fas fa-map-marker-alt"></i> Electronic City, Bangalore</div>
          <div class="project_info"><i class="fas fa-calendar-alt"></i> 2024 • 3 Lakh Sq.ft</div>
        </div>
      </div>



      <div class="project_card" data-type="commercial">
        <img src="./images/Sky.png" alt="RGE Construction">
        <div class="project_content">
          <div class="project_title">Sky Park</div>
          <div class="project_desc">Multi-use commercial complex with retail, office, and entertainment spaces.</div>
          <div class="project_info"><i class="fas fa-map-marker-alt"></i>MG Road, Bangalore</div>
          <div class="project_info"><i class="fas fa-calendar-alt"></i> 2022 • 4 Lakh Sq.ft</div>
        </div>
      </div>


      <div class="project_card" data-type="commercial">
        <img src="./images/umiya.png" alt="RGE Construction">
        <div class="project_content">
          <div class="project_title">Umiya Sundance</div>
          <div class="project_desc">High-rise residential tower with smart home automation and sustainable features.</div>
          <div class="project_info"><i class="fas fa-map-marker-alt"></i> Yeshwanthpur, Bangalore</div>
          <div class="project_info"><i class="fas fa-calendar-alt"></i> 2024 • 2.2 Lakh Sq.ft</div>
        </div>
      </div>


    </div>
  </div>




    <!-- ------------------------------------- -->


  <!-- JavaScript for Filter -->
  <script>
    const tabs = document.querySelectorAll(".project_tab");
    const cards = document.querySelectorAll(".project_card");

    tabs.forEach(tab => {
      tab.addEventListener("click", () => {
        document.querySelector(".project_tab.active").classList.remove("active");
        tab.classList.add("active");

        const type = tab.getAttribute("data-type");

        cards.forEach(card => {
          if (type === "all" || card.getAttribute("data-type") === type) {
            card.style.display = "block";
          } else {
            card.style.display = "none";
          }
        });
      });
    });
  </script>



  <?php include 'footer.php'; ?>


</body>

</html>