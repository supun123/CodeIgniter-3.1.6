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
    <link href="<?php echo base_url()."home_page/"; ?>css/style.css" rel="stylesheet">
    <script>href="<?php echo base_url() ."home_page/"; ?>vendor/popper/popper.js" </script>
</head>

<body id="page-top">

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
                    <a class="nav-link js-scroll-trigger" href="#register">register</a>
                </li>
                <li class="nav-item" id="hid">
                    <a class="nav-link js-scroll-trigger" href="#sign_in " data-toggle="modal" data-target="#signInModal">sign in </a>
                </li>
            </ul>
        </div>

    </div>

</nav>


<!-- Sign-In Modal -->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if($this->session->flashdata('errmsglogin')){
                    echo"<h3>".$this->session->flashdata('errmsglogin')."</h3>";
                }?>
                <?php echo form_open('login/loginUser');?>

                    <div class="form-group">
                        <label for="formGroupExampleInput">Username</label>
                        <p>  <font color="red" size="3"> <?php echo form_error('singInUserName'); ?></font></p>
                        <input type="text" class="form-control" id="Username" placeholder="Enter Username" name="singInUserName">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Password</label>
                        <p>  <font color="red" size="3"> <?php echo form_error('singInPassword'); ?></font></p>
                        <input type="password" class="form-control" id="password" placeholder="Enter  Password"name="singInPassword">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#UserNameModal">Forgot Password</button>
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>

                <?php echo form_close();?>

            </div>

        </div>
    </div>
</div>

<!-- forgot-password get username Modal -->
<div class="modal fade" id="UserNameModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if($this->session->flashdata('forgotMsg')){
                    echo"<h3>".$this->session->flashdata('forgotMsg')."</h3>";
                }?>
                <?php echo form_open('login/forgotPasswordcheckUsername');?>

                <div class="form-group">
                    <label for="formGroupExampleInput">Username</label>
                    <p>  <font color="red" size="3"> <?php echo form_error('forgotUserName'); ?></font></p>
                    <input type="text" class="form-control" id="Username" placeholder="Enter Username" name="forgotUserName">
                    <p class="help-block text-danger"></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <?php echo form_close();?>

            </div>

        </div>
    </div>
</div>