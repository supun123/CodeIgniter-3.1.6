<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/28/2017
 * Time: 12:51 AM
 */

class user_model extends CI_Model{

    public function registerUser(){
      $data=array(
            'userName'=>$this->input->post('userName',TRUE),
            'name'=>$this->input->post('name',TRUE),
            'nic'=>$this->input->post('nic',TRUE),
            'phoneNumber'=>$this->input->post('phoneNumber',TRUE),
            'status'=>'customer',
            'password'=>sha1($this->input->post('password',TRUE))

      );
      return $this->db->insert('user',$data);
}
    public function updateUser(){
        $data=array(
            'userName'=>$this->input->post('userName',TRUE),
            'name'=>$this->input->post('name',TRUE),
            'nic'=>$this->input->post('nic',TRUE),
            'phoneNumber'=>$this->input->post('phoneNumber',TRUE),
            'status'=>'customer'
        );
        $userId=$this->session->userdata('userId');
        $this->db->where('userId',$userId);
        return $this->db->update('user',$data);

}
    public function getUserData(){
        $userId=$this->session->userdata('userId');
        $sql='SELECT * FROM `user` WHERE userId='.$userId;
        $respond=$this->db->query($sql);

        if ($respond->num_rows()==1){
            return $respond->row(0);
        }else{
            return false;
        }

}


    public function loginUser()
    {
        $userName=$this->input->post('singInUserName',TRUE);
        $password=sha1($this->input->post('singInPassword',TRUE));
        $this->db->where('userName',$userName);
        $this->db->where('password',$password);
        $respond=$this->db->get('user');

        if($respond->num_rows()==1){
            return $respond->row(0);
            die();
        }else{
            return false;
            die();

        }
       // return false;
    }
    public function addFeedBack()
    {
       // public function registerUser(){
        $data=array(
            'userId'=>$this->session->userdata('userId'),
           'feedBack'=>$this->input->post('feedback',TRUE)
        );
        return $this->db->insert('feedBack',$data);
    }
    public function checkPreePassword()

    {
        $password=sha1($this->input->post('preePassword',TRUE));
        $userId=$this->session->userdata('userId');
        $this->db->where('password',$password);
        $this->db->where('userId',$userId);
        $respond=$this->db->get('user');

        if($respond->num_rows()==1){
            return $respond->row(0);
            die();
        }else{
            return false;
            die();

        }
    }
    public function editPassword()
    {
        $data=array(
            'password'=>sha1($this->input->post('newPassword',TRUE))
        );
        $userId=$this->session->userdata('userId');
        $this->db->where('userId',$userId);
        return $this->db->update('user',$data);
    }
    public function getuser()
    {
        $userName=$this->input->post('forgotUserName',TRUE);
        $this->db->where('userName',$userName);
        $respond=$this->db->get('user');

        if($respond->num_rows()==1){
            return $respond->row(0);
            die();
        }else{
            return false;
            die();

        }
    }
    public function updatePasswordWhenForgot()
    {
        $data=array(
            'password'=>sha1($this->input->post('newPassword',TRUE))
        );
        $userId=$this->input->post('userId',TRUE);
        $this->db->where('userId',$userId);
        return $this->db->update('user',$data);
    }


}