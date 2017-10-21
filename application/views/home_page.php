<?php include 'partials/header.php'?>
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <img class="img-rounded" src="<?php echo base_url()."home_page/"; ?>img/kitchen.jpeg" alt="">
        <div class="intro-text">
          <span class="name">wellcome</span>
          <hr class="star-light">
            <span class="skills">Thanks for stopping by!!!
                <p>We are open from 8.00 a.m to 6.00 p.m 365 days except for Department holidays. </p>
                        <p>We are providing Breakfast, Lunch and Evening meals. In addition to that Bakery items will be available at open hours.</p>
                        <p>For the beverages, we are providing Snacks, home made juices,as well as tea, coffee, plant tea according to your preference.</p>
                        <p>Deserts are also available. </p>
            </span>
           </div>
         </div>
       </header>

       <!-- Portfolio Grid Section -->
    <section id="Menu">
      <div class="container">
        <h2 class="text-center">Menu</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal1" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/portfolio/breakfast.jpg" alt="">

            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal2" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/portfolio/lunch.jpg" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal3" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/portfolio/evening.jpg" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal4" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/portfolio/snacks.jpg" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal5" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/portfolio/drinks.jpg" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal6" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/portfolio/other.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>


    <!-- register Section -->
<section id="register">
    <div class="container">
        <h1 class="text-center">register</h1>
        <hr class="star-primary">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Username</label>
                            <input class="form-control" id="name" type="text" placeholder="Username" required data-validation-required-message="Please enter your Username.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Name</label>
                            <input class="form-control" id="Name" type="text" placeholder="Name" required data-validation-required-message="Please enter your Name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>NIC</label>
                            <input class="form-control" id="phone" type="tel" placeholder="NIC" required data-validation-required-message="Please enter your NIC number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Password</label>
                            <input class="form-control" id="Password" type="Password" placeholder="Password" required data-validation-required-message="Please enter your Password.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Conform Password</label>
                            <input class="form-control" id="Conform_Password" type="Password" placeholder="Conform Password" required data-validation-required-message="Please enter your Conform Password.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">submit</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</section>
<!-- About Section -->
<section class="success" id="about">
    <div class="container">
        <h2 class="text-center">About</h2>
        <hr class="star-light">
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p></p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p</p>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'?>

