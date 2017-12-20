<?php include 'partials/header.php'?>


<!-- Portfolio Grid Section -->
<section id="Menu">
    <div class="container">
        <br><br>
        <h2 class="text-center">User Profile</h2>
        <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <?php if($this->session->flashdata('msg')){
                echo"<h3>".$this->session->flashdata('msg')."</h3>";
            } ?>
            <?php echo form_open('registeredUser/editUserProfile');?>
            <!-- <form name="sentMessage" id="contactForm" novalidate> -->
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Username</label>
                    <p>  <font color="red" size="3"> <?php echo form_error('userName'); ?></font></p>
                    <input class="form-control" id="name" type="text" placeholder="Username"  name="userName" value="<?php if(set_value('userName')){echo set_value('userName');}else{echo $this->session->userdata('userName');} ?>">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Name</label>
                    <p>  <font color="red" size="3"><?php echo form_error('name'); ?></font></p>
                    <input class="form-control" id="Name" type="text" placeholder="Name" name="name"value="<?php if(set_value('name')){echo set_value('name');}else{echo $this->session->userdata('name');} ?>">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>NIC</label>
                    <p>  <font color="red" size="3"><?php echo form_error('nic'); ?></font></p>
                    <input class="form-control" id="NIC" type="tel" placeholder="NIC" name="nic" value="<?php if(set_value('nic')){echo set_value('nic');}else{echo $this->session->userdata('nic');} ?>">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Phone Number</label>
                    <p>  <font color="red" size="3"> <?php echo form_error('phoneNumber'); ?></font></p>
                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number"  name="phoneNumber" value="<?php if(set_value('phoneNumber')){echo set_value('phoneNumber');}else{echo $this->session->userdata('phoneNumber');} ?>" >
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div id="success"></div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">save</button>
            </div>
            <!--</form>-->
            <?php echo form_close();?>

            <?php echo form_open('registeredUser/editPassword');?>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Edit Password</button>
            </div>
            <?php echo form_close();?>
        </div>

    </div>
</section>





<?php include 'partials/footer.php'?>

