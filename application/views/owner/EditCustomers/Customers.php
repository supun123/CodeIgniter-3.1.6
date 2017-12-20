<?php include 'partials/header.php';?>
<div id="sidebar1">
    <header class="masthead">
        <H3>Customers</H3>
    </header>
</div>

<div id="sidebar2">
    <!-- Header -->

    <section id="Customerview">

        <div class="container" >
            <div class="col-lg-12 mx-auto">
                <table class="table">
                    <thead>
                    <tr>
                        <th>UserId</th>
                        <th>User_Name</th>
                        <th>Name</th>
                        <th>NIC_Number</th>
                        <th>Phone_Number</th>
                        <!-- <th>feedback</th> -->

                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    if($customer->num_rows()>0)
                    {
                        foreach ($customer->result() as $Crow){
                            ?>
                            <tr>
                            <td><?php echo $Crow->userId;?></td>
                            <td><?php echo $Crow->userName;?></td>
                            <td><?php echo $Crow->name;?></td>
                            <td><?php echo $Crow->nic;?></td>
                            <td><?php echo $Crow->phoneNumber;?></td>
                            <td>
                                <form class="navbar-form" method="post" action="<?php echo base_url("index.php/owner/deleteCustomer/")?><?php  echo ($Crow->userId)?>">
                                    <div class="col-md-4">
                                        <!-- <input class="form-control" type="text" id="deleteCus" name="deleteCus" placeholder="Type Customer Id.. "> -->


                                        <button name="deleteCus"  type="submit" value="deleteCus" class="btn btn-default"> Delete </button>

                                    </div>


                                </form>
                            </td>

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



    <!-- Portfolio Grid Section -->
    <!--  <section id="Menu">
         <div class="container">


         </div>
     </section> -->


    <!-- register Section --><!--
<section id="register">
    <div class="container">
kjj

    </div>
</section> -->

    <!-- About Section -->
    <!-- <section class="success" id="about">
        <div class="container">
    kjk
        </div>
    </section>
    </div> -->
    <?php include 'partials/footer.php'?>

