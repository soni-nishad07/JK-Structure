
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
        
             <a class="navbar-brand logo-container" href="index">
    <!-- Top image: Structure -->
    <img src="./images/js-stru.png" alt="Structure Icon" class="logo-top" />

    <!-- Bottom image: JK STRUCTURE -->
    <img src="./images/JK STRUCTURE.png" alt="JK STRUCTURE" class="logo-bottom" />
</a>



            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item"><a class="nav-link" href="index">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about">About Us</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="service"> Services</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="./infrastructure.php">Infrastructure</a></li>
                    <li class="nav-item"><a class="nav-link" href="./project.php">Project</a></li>
                    

                    <li class="nav-item"><a class="nav-link" href="./client.php">Clients</a></li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact Us</a>
                    </li>
                
                </ul>

                <div class="home_bhtns">
                    <!-- <a class="btn btn-light mx-2  login" href="admin/index">Log In</a> -->
                    <a class="btn btn-primary  signin" href="contact#enquiry">Get Quote</a>
                </div>

            </div>
        </div>
    </nav>

    
    <script>
        $(document).ready(function () {
            $('.navbar-toggler').click(function () {
                $('#navbarNav').collapse('toggle');
            });
        });
    </script>
    

