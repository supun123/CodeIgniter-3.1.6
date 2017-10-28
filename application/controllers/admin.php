<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/28/2017
 * Time: 7:11 PM
 */

class admin extends CI_Controller{
public function index()
{
    $this->load->view('admin/dashboard');
}
}