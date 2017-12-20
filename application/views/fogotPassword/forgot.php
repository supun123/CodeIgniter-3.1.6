<?php include 'partials/header.php'?>




<?php
function sendSms($number,$massage)
{
    $number = ltrim($number, '0');
    $number= '94'.$number;
// Authorisation details.
    $username = "supunsnnk@gmail.com";
    $hash = "b6a22ab63e78e8916617d011e700ce8ffdab3e7af4a92463f9add48b639e23ea";

// Config variables. Consult http://api.txtlocal.com/docs for more info.
    $test = "0";

// Data for text message. This is the text message data.
    $sender = "Canteen"; // This is who the message appears to be from.
    $numbers = $number; // A single number or a comma-seperated list of numbers
    $message = $massage;
// 612 chars or less
// A single number or a comma-seperated list of numbers
    $message = urlencode($message);
    $data = "username=" . $username . "&hash=" . $hash . "&message=" . $message . "&sender=" . $sender . "&numbers=" . $numbers . "&test=" . $test;
    $ch = curl_init('http://api.txtlocal.com/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
    return($result);
}
?>
    <!-- register Section -->
<section id="register">
    <div class="container"><br>
        <h1 class="text-center">Change Password </h1>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <?php if($this->session->flashdata('msg')){
                    echo"<h3>".$this->session->flashdata('msg')."</h3>";
                } ?>
                <?php
                $code = rand(pow(10, 6-1), pow(10, 6)-1);
                ?>
                <?php $s=sendSms($phoneNumber,'Code: '.$code);?>
                <p><?php//echo$code ?> <?php //echo $phoneNumber ?><?php print_r( $s);?></p>
                <p>we send six digits code to your mobile number </p>
                <?php echo form_open('login/forgotAndChanegePassword');?>

                <div class="form-group">
                    <input type="hidden"   name="sendCode" value=<?php echo $code;?>>
                </div>
                <div class="form-group">
                    <input type="hidden"   name="userId" value=<?php echo $userId;?>>
                </div>
                <div class="form-group">
                    <input type="hidden"   name="phoneNumber" value=<?php echo $phoneNumber;?>>
                </div>
                <div class="form-group">
                    <p>  <font color="red" size="3"> <?php echo form_error('code'); ?></font></p>
                    <input type="text" class="form-control" id="code" placeholder="Enter Code" name="code">
                    <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                    <p>  <font color="red" size="3"> <?php echo form_error('newPassword'); ?></font></p>
                    <input type="password" class="form-control" id="newPassword" placeholder="Enter New Password"name="newPassword">
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                    <p>  <font color="red" size="3"> <?php echo form_error('conformPassword'); ?></font></p>
                    <input type="password" class="form-control" id="conformPassword" placeholder="Enter  Conform Password"name="conformPassword">
                    <p class="help-block text-danger"></p>
                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary">Save Password</button>
                </div>

                <?php echo form_close();?>



            </div>
        </div>
    </div>
</section>



<?php include 'partials/footer.php'?>

