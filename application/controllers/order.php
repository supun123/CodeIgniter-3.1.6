<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/26/2017
 * Time: 12:55 AM
 */

class order extends CI_Controller{

    public function makeOrder(){
    echo ("supun");
        if(empty($order))
        {   echo("zzz");
            $this->load->view('home_page');
        }else{
            echo("ok");
        }
    die();
    }

}