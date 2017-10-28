<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/28/2017
 * Time: 12:51 AM
 */

class register_model extends CI_Model{

    public function registerUser(){
      $data=array(
            'userName'=>$this->input->post('userName',TRUE),
            'name'=>$this->input->post('name',TRUE),
            'nic'=>$this->input->post('nic',TRUE),
            'phoneNumber'=>$this->input->post('phoneNumber',TRUE),
            'password'=>sha1($this->input->post('password',TRUE))
      );

      return $this->db->insert('user',$data);
      die();


}

}