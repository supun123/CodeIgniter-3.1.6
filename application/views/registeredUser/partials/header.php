<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()."home_page/"; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->

    <link href="<?php echo base_url()."home_page/"; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href=https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href=https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()."home_page/"; ?>css/freelancer.min.css" rel="stylesheet">
    <script>href="<?php echo base_url() ."home_page/"; ?>vendor/popper/popper.js" </script>
    <link href="<?php echo base_url()."home_page/"; ?>css/style.css" rel="stylesheet" type="text/css">
</head>

<body id="page-top">
<?php
if(!$this->session->userdata('loggedin')){
    redirect('Home/index');
}
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">ucsc canteen </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#Menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php echo base_url('index.php/order/makeOrder')?>">Make Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="" data-toggle="modal" data-target="#Feedback">Feedback</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo  $this->session->userdata('userName');?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo base_url('index.php/login/logoutUser')?>">Logout</a>
                        <a class="dropdown-item" href="<?php echo base_url('index.php/registeredUser/userProfile')?>">User profile</a>
                    </div>
                </li>
            </ul>
        </div>

    </div>

</nav>
<!-- Feedback Modal -->
<div class="modal fade" id="Feedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Feedback</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php echo form_open('feedback/makeOrder');?>
                <form>
                    <div class="form-group">

                        <label >Enter Feedback</label>
                        <p>  <font color="red" size="3"> <?php echo form_error('feedback'); ?></font></p>
                        <textarea class="form-control" id="Textarea" rows="3" name="feedback"></textarea>
                        <p class="help-block text-danger"></p>
                        <br>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send </button>

                    </div>
                </form>
                <?php form_close();?>


            </div>


        </div>
    </div>
</div>
