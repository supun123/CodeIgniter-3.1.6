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
<div id="sidebar2">
<section id="register">

    <br>
    <br>
    <div class="container" >
        <div class="col-lg-12 mx-auto">
            <?php if($sms){   ?>

                <?php if($act){?>

                    <h1> reject order  Send sms to user</h1>
                    <?php $result= sendSms( $userdata->phoneNumber,'Sorry Mr/Mrs/Miss '.$userdata->name.' We have to reject  your order');?>
                    <?php echo $result;?>
                    <p> <?php echo($result);  ?></p>
                <?php }else{?>
                    <?php $result=sendSms( $userdata->phoneNumber,'Mr/Mrs/Miss '.$userdata->name.' We accept your order ');?>
                    <h1> accept order Send sms to user</h1>
                    <p><?php echo($result);?></p>
                <?php }?>

            <?php  }else{?>

            <?php  }?>
        <table class="table">
            <thead>
            <tr>
                <th>Username</th>
                <th>Order_id</th>
                <th>Food_id</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Actor</th>
                <th></th>
            </tr>
            </thead>
            <tbody>

            <?php
            if($order->num_rows()>0)
            {
                foreach ($order->result() as $row){
                    ?>
                    <tr>
                        <td><?php echo $row->userId;?></td>
                        <td><?php echo $row->order_id;?></td>
                        <td><?php echo $row->food_id;?></td>
                        <td><?php echo $row->name;?></td>
                        <td><?php echo $row->quantity;?></td>
                        <td><?php echo $row->actor;?></td>
                        <td>
                            <form  action="<?php echo base_url('index.php/owner/buttonRun/')?><?php echo $row->userId,'/',$row->order_id,'/',$row->food_id,'/',$row->actor;?>" method="POST">
                                <button type="submit" class="btn btn-primary  btn-xs">
                                    <?php
                                    if($row->actor=='false') {
                                        echo 'Make True';
                                    }
                                    else{
                                        echo 'Make false';
                                    };
                                    ?>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
            }
            else{
                ?>
                <tr>
                    <td colspan="3">No Data Found</td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        </div>
    </div>
</section>


</div>
<?php include 'partials/footer.php'?>

