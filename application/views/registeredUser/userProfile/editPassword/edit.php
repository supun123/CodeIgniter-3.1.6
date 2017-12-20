<?php include 'partials/header.php'?>


<!-- Portfolio Grid Section -->
<section id="Menu">
    <div class="container">
        <br><br>
        <h2 class="text-center">Edit Password</h2>
        <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <?php if($this->session->flashdata('msg')){
                echo"<h3>".$this->session->flashdata('msg')."</h3>";
            } ?>
            <?php echo form_open('registeredUser/editPasswordFinal');?>
            <!-- <form name="sentMessage" id="contactForm" novalidate> -->
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>previous password</label>
                    <p>  <font color="red" size="3"> <?php echo form_error('preePassword'); ?></font></p>
                    <input class="form-control" id="Password" type="Password" placeholder="previous passwords"  name="preePassword" value="">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>New Password</label>
                    <p>  <font color="red" size="3"> <?php echo form_error('newPassword'); ?></font></p>
                    <input class="form-control" id="Password" type="Password" placeholder="New Password"  name="newPassword" value="">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Conform Password</label>
                    <p>  <font color="red" size="3">  <?php echo form_error('conformPassword'); ?></font></p>
                    <input class="form-control" id="Conform_Password" type="Password" placeholder="Conform Password"  name="conformPassword" value="<?php echo set_value('conformPassword'); ?>" >
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div id="success"></div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">save new password</button>
            </div>
            <!--</form>-->
            <?php echo form_close();?>


        </div>

    </div>
</section>





<?php include 'partials/footer.php'?>

