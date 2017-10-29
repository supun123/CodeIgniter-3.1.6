<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/29/2017
 * Time: 3:53 AM
 */

class owner extends CI_Controller
{
public function index()
{echo "owner";
    $this->load->view('owner/admin_page');
}
}