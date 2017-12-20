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

