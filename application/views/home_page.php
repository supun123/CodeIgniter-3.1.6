<?php include 'partials/header.php'?>
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/profile.png" alt="">
        <div class="intro-text">
          <span class="name">wellcome</span>
          <hr class="star-light">
            <!-- <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>-->
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
              <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/portfolio/cabin.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="<?php echo base_url()."home_page/"; ?>#portfolioModal2" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/portfolio/cake.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal3" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/portfolio/circus.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal4" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/portfolio/game.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal5" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/portfolio/safe.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal6" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/portfolio/submarine.png" alt="">
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
                <?php if($this->session->flashdata('msg')){
                    echo"<h3>".$this->session->flashdata('msg')."</h3>";
                } ?>
                <?php echo form_open('register/addUser');?>
               <!-- <form name="sentMessage" id="contactForm" novalidate> -->
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Username</label>
                            <p>  <font color="red" size="3"> <?php echo form_error('username'); ?></font></p>
                            <input class="form-control" id="name" type="text" placeholder="Username"  name="userName" value="<?php echo set_value('userName'); ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Name</label>
                            <p>  <font color="red" size="3"><?php echo form_error('name'); ?></font></p>
                            <input class="form-control" id="Name" type="text" placeholder="Name" name="name"value="<?php echo set_value('name'); ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>NIC</label>
                            <p>  <font color="red" size="3"><?php echo form_error('nic'); ?></font></p>
                            <input class="form-control" id="phone" type="tel" placeholder="NIC"required name="nic" value="<?php echo set_value('nic'); ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Phone Number</label>
                            <p>  <font color="red" size="3"> <?php echo form_error('phoneNumber'); ?></font></p>
                            <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required name="phoneNumber" value="<?php echo set_value('phoneNumber'); ?>" >
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Password</label>
                            <p>  <font color="red" size="3"> <?php echo form_error('password'); ?></font></p>
                            <input class="form-control" id="Password" type="Password" placeholder="Password" required name="password" value="<?php echo set_value('password'); ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Conform Password</label>
                            <p>  <font color="red" size="3">  <?php echo form_error('conformPassword'); ?></font></p>
                            <input class="form-control" id="Conform_Password" type="Password" placeholder="Conform Password" required name="conformPassword" value="<?php echo set_value('conformPassword'); ?>" >
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">submit</button>
                    </div>
                <!--</form>-->
                <?php echo form_close();?>


            </div>
        </div>
    </div>
</section>
<?php echo validation_errors(); ?>
<!-- About Section -->
<section class="success" id="about">
    <div class="container">
        <h2 class="text-center">About</h2>
        <hr class="star-light">
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
            </div>
            <div class="col-lg-8 mx-auto text-center">
                <a href="<?php echo base_url()."home_page/"; ?>#" class="btn btn-lg btn-outline">
                    <i class="fa fa-download"></i>
                    Download Theme
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'?>

