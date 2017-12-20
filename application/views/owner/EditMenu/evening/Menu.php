<?php include 'partials/header.php' ?>
<div id="sidebar1">

</div>

<div id="sidebar2">
    <!-- Portfolio Grid Section -->
    <section id="register"  >
        <div class="container">
            <br>
            <h1  class="text-center"> Evening Menu</h1>
            <br><br>
            <div class="container" >
                <div class="col-lg-12 mx-auto">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Unit Prize</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        if($evening->num_rows()>0)
                        {
                            foreach ($evening->result() as $row){
                                ?>
                                <tr>
                                    <td><?php echo $row->foodid;?></td>
                                    <td><?php echo $row->items;?></td>
                                    <td><?php echo $row->price;?></td>
                                    <td>
                                        <form  action="<?php echo base_url('index.php/owner/removeEveningData/')?><?php echo $row->foodid;?>" method="POST">
                                            <button type="submit" class="btn btn-primary  btn-xs">
                                                Remove
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
            <h1  class="text-center"> Free Available  Evening </h1>
            <br><br>
            <div class="container" >
                <div class="col-lg-12 mx-auto">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Unit Prize</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        if($preeAvailables->num_rows()>0)
                        {
                            foreach ($preeAvailables->result() as $row){
                                ?>
                                <tr>
                                    <td><?php echo $row->foodid;?></td>
                                    <td><?php echo $row->items;?></td>
                                    <td><?php echo $row->price;?></td>
                                    <td>
                                        <form  action="<?php echo base_url('index.php/owner/removeFreeAvailablesEveningData/')?><?php echo $row->foodid;?>" method="POST">
                                            <button type="submit" class="btn btn-primary  btn-xs">
                                                Remove
                                            </button>
                                        </form>
                                    </td>
                                    <th>
                                        <form  action="<?php echo base_url('index.php/owner/addDataEveningMenu/')?><?php echo $row->foodid;?>" method="POST">
                                            <button type="submit" class="btn btn-primary  btn-xs">
                                                Add Menu
                                            </button>
                                        </form>
                                    </th>
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
        </div>
    </section>
    <section id="register">
        <div class="container">
            <h1 class="text-center">Add New evening </h1>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <?php if($this->session->flashdata('msg')){
                        echo"<h3>".$this->session->flashdata('msg')."</h3>";
                    } ?>
                    <?php echo form_open('owner/addEvening');?>
                    <!-- <form name="sentMessage" id="contactForm" novalidate> -->
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Evening</label>
                            <p>  <font color="red" size="3"> <?php echo form_error('name'); ?></font></p>
                            <input class="form-control" id="name" type="text" placeholder="Name"  name="name" value="<?php echo set_value('name'); ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Unit Prize</label>
                            <p>  <font color="red" size="3"><?php echo form_error('unitPrize'); ?></font></p>
                            <input class="form-control" id="unitPrize" type="text" placeholder="Unit Prize" name="unitPrize"value="<?php echo set_value('unitPrize'); ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div id="success"></div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Add</button>
                    </div>
                    <!--</form>-->
                    <?php echo form_close();?>


                </div>
            </div>
        </div>
    </section>

</div>
<?php include 'partials/footer.php' ?>

