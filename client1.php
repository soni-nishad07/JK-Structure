
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client</title>


  <?php include('link.php'); ?>

</head>

<body>

  <?php include('nav.php'); ?>





  <div class="home_container">
    <!-- Background Video -->
    <video autoplay muted loop playsinline>
      <source src="./images/nav.mp4" type="video/mp4">
    </video>

    <!-- Overlay -->
    <div class="home_overlay"></div>

    <!-- Content -->
   <div class="home_content">
      <div class="home_main-text">
        <span class="home_highlight">OUR CLIENTS</span>
      </div>
      <!-- <p>Trusted by leading organizations across various sectors for our <br> engineering excellence and commitment</p> -->
       <p>JK Structure collaborates with several renowned developers and architectural <br/> organizations. Below are a few of our esteemed partners in development and architecture.
     </p>
    </div>

  </div>





<section class="who_we_serve_ text-center">
  <div class="container">
    <h2>Who We Serve</h2>
    <p class="subheading">From corporate giants to government agencies,  we serve diverse clients with tailored engineering solutions</p>

    <div class="row client_grid g-5">
      <!-- Card 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="client_card-box">
          <div class="client_card-top">
            <div class="client_icon"><img src="./images/Quality.png" alt=""></div>
            <div class="client_number">150+</div>
            <div class="client_title">Quality Management System</div>
          </div>
          <div class="card-bottom">
            Leading corporations trust us with their infrastructure needs.
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="client_card-box">
          <div class="client_card-top">
            <div class="client_icon"><img src="./images/Government.png" alt=""></div>
            <div class="client_number">25+</div>
            <div class="client_title">Government Projects</div>
          </div>
          <div class="card-bottom">
            Public sector projects executed with excellence and integrity.
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="client_card-box">
          <div class="client_card-top">
            <div class="client_icon"><img src="./images/Private.png" alt=""></div>
            <div class="client_number">200+</div>
            <div class="client_title">Private Developers</div>
          </div>
          <div class="card-bottom">
            Real estate developers rely on our structural expertise.
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="client_card-box">
          <div class="client_card-top">
            <div class="client_icon"><img src="./images/International.png" alt=""></div>
            <div class="client_number">15+</div>
            <div class="client_title">International Clients</div>
          </div>
          <div class="card-bottom">
            Global partnerships highlight our engineering excellence.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- ------------------------------- -->


  <div class="our_client_section">
    <h2>Our Major Clients</h2>
    <p>Long-term partnerships with industry leaders who trust our expertise and reliability</p>

    <div class="our_client_grid">
      <div class="our_client_card">

        <div class="client_title1">
          <div class="our_client_title">Prestige Group</div>
          <img src="./images/client.png" alt="" class="client-img">
        </div>

        <div class="client">
          <div class="our_client_industry">Real Estate</div>
        </div>

        <div class="our_client_info">
          <div><span>Projects</span>15+ Projects</div>
          <div><span>Partnership</span>8 Years</div>
        </div>
      </div>



      <div class="our_client_card">
        <div class="client_title1">
          <div class="our_client_title">Brigade Enterprises</div>
          <img src="./images/client.png" alt="" class="client-img">
        </div>
        <div class="client">
          <div class="our_client_industry">Construction</div>
        </div>
        <div class="our_client_info">
          <div><span>Projects </span>12+ Projects</div>
          <div><span>Partnership </span>6 Years</div>
        </div>
      </div>

      <div class="our_client_card">
        <div class="client_title1">
          <div class="our_client_title">Mantri Developers</div>
                    <img src="./images/client.png" alt="" class="client-img">
        </div>
        <div class="client">
          <div class="our_client_industry">Real Estate</div>
        </div>
        <div class="our_client_info">
          <div><span>Projects </span>20+ Projects</div>
          <div><span>Partnership </span>10 Years</div>
        </div>
      </div>

      <div class="our_client_card">
        <div class="client_title1">
          <div class="our_client_title">Sobha Limited</div>
          <img src="./images/client.png" alt="" class="client-img">
        </div>
        <div class="client">
          <div class="our_client_industry">Construction</div>
        </div>
        <div class="our_client_info">
          <div><span>Projects </span>8+ Projects</div>
          <div><span>Partnership </span>5 Years</div>
        </div>
      </div>

      <div class="our_client_card">
        <div class="client_title1">
          <div class="our_client_title">Embassy Group</div>
                    <img src="./images/client.png" alt="" class="client-img">
        </div>
        <div class="client">
          <div class="our_client_industry">Commercial</div>
        </div>
        <div class="our_client_info">
          <div><span>Projects </span>10+ Projects</div>
          <div><span>Partnership </span>7 Years</div>
        </div>
      </div>

      <div class="our_client_card">
        <div class="client_title1">
          <div class="our_client_title">Godrej Properties</div>
                              <img src="./images/client.png" alt="" class="client-img">
        </div>
        <div class="client">
          <div class="our_client_industry">Real Estate</div>
        </div>
        <div class="our_client_info">
          <div><span>6+ Projects</span>Projects</div>
          <div><span>4 Years</span>Partnership</div>
        </div>
      </div>
    </div>
  </div>


  <?php include('footer.php'); ?>


</body>

</html>