<?php
/**
 * Created by PhpStorm.
 * User: maneesha
 * Date: 10/20/2017
 * Time: 5:01 PM
 **/
  defined('BASEPATH') OR exit('No direct script access allowed');

  class menu extends CI_Controller{
      function __construct()
      {
          parent::__construct();
          $this->load->helper(array("url","form"));
          $this->load->library(array("session","form_validation","email"));
          $this->load->database();
      }

      public function index_menu(){
          $this->load->view('menu/breakfast');
      }
  }
?>