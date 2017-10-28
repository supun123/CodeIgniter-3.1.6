<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/28/2017
 * Time: 1:23 PM
 */

class login extends CI_Controller{
public function loginUser(){

echo"loginUser";

    $this->form_validation->set_rules('singInUserName', 'Username', 'required');
    $this->form_validation->set_rules('singInPassword', 'Password', 'required');

    if ($this->form_validation->run() == FALSE)
    {
        $this->load->view('home_Page');
    }
    else
    {
        $this->load->model('user_model');
        $responce=$this->user_model->loginUser();
        if($responce!=false){
            $this->session->set_flashdata('msglogin','registered successfully');
            $userdata=array(
                'userName'=>$responce->userName,
                'name'=>$responce->name,
                'nic'=>$responce->nic,
                'phoneNumber'=>$responce->phoneNumber,
                'loggedin'=>TRUE
            );
            $this->session->set_userdata($userdata);
            print_r($_SESSION);
            redirect('admin/index');
        }
        else{
            $this->session->set_flashdata('errmsglogin','Wrong Username or password');
            redirect('Home/index');
        }

        //$this->load->view('formsuccess');
    }
}

}