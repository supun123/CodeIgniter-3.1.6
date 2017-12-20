<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/28/2017
 * Time: 1:23 PM
 */

class login extends CI_Controller{
public function loginUser(){



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
            $this->session->set_flashdata('msglogin','logging successfully');
            $userdata=array(
                'userId'=>$responce->userId,
                'userName'=>$responce->userName,
                'name'=>$responce->name,
                'nic'=>$responce->nic,
                'phoneNumber'=>$responce->phoneNumber,
                'status'=>$responce->status,
                'loggedin'=>TRUE,

            );
            $this->session->set_userdata($userdata);
            if($responce->status=='customer'){
                redirect('registeredUser/index');
            }
            else if($responce->status== 'admin'){
               redirect('owner/index');
            }
        }
        else{
            $this->session->set_flashdata('errmsglogin','Wrong Username or password');
          //  echo( $responce);
          //  print_r( 'Wrong Username or password');
             redirect('Home/index');
        }
    }
}
public function logoutUser(){
    $this->session->unset_userdata('userId');
    $this->session->unset_userdata('userName');
    $this->session->unset_userdata('name');
    $this->session->unset_userdata('nic');
    $this->session->unset_userdata('phoneNumber');
    $this->session->unset_userdata('loggedin');
    redirect('Home/index');
}
public function forgotPasswordcheckUsername()
{
    $this->form_validation->set_rules('forgotUserName', 'forgotUserName', 'required');
    if ($this->form_validation->run() == FALSE)
    {
        $this->load->view('home_Page');
    }
    else {
        $this->load->model('user_model');
        $responce=$this->user_model->getuser();
        if($responce){
            $data['phoneNumber']=$responce->phoneNumber;
            $data['userId']=$responce->userId;
            $this->load->view('fogotPassword/forgot',$data);
        }else{
            $this->session->set_flashdata('forgotMsg','User name is  Wrong');
            redirect('Home/index');
        }

    }
}
public function forgotAndChanegePassword()
{
    $this->form_validation->set_rules('code', 'code', 'required');
    $this->form_validation->set_rules('newPassword', 'Password', 'required');
    $this->form_validation->set_rules('conformPassword', 'Conform Password', 'required|matches[newPassword]');
    if ($this->form_validation->run() == FALSE)
    {
        $data['phoneNumber']=$this->input->post('phoneNumber',TRUE);
        $data['userId']=$this->input->post('userId',TRUE);
        $this->load->view('fogotPassword/forgot',$data);
    }
    else {
        $enterCode=$this->input->post('code',TRUE);
        $sendCode=$this->input->post('sendCode',TRUE);

        if($sendCode==$enterCode){
            $this->load->model('user_model');
            $responce=$this->user_model->updatePasswordWhenForgot();
            if($responce){
                redirect('Home/index');
            }else{
                $this->session->set_flashdata('msg','something went wrong');
                $data['phoneNumber']=$this->input->post('phoneNumber',TRUE);
                $data['userId']=$this->input->post('userId',TRUE);
                $this->load->view('fogotPassword/forgot',$data);
            }
        }else{
            $this->session->set_flashdata('msg','Entered code is  Wrong');
            $data['phoneNumber']=$this->input->post('phoneNumber',TRUE);
            $data['userId']=$this->input->post('userId',TRUE);
            $this->load->view('fogotPassword/forgot',$data);
        }
    }
}

}