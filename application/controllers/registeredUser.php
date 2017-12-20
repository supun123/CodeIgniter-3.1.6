<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/28/2017
 * Time: 7:11 PM
 */

class registeredUser extends CI_Controller{
    public function index()
    {
        $this->load->model('menu'); //load the name of the model
        $data['records1'] = $this->menu->getBreakfast();
        $data['records2'] = $this->menu->getLunch();
        $data['records3'] = $this->menu->getEvening();
        $data['records4'] = $this->menu->getShorteats();
        $data['records5'] = $this->menu->getBeverages();
    $this->load->view('registeredUser/dashboard',$data);
    }

    public function userProfile()
    {

        $this->load->view('registeredUser/userProfile/userProfile');

    }
    public function editUserProfile()
    {
        $userName=$this->session->userdata('userName');
        $usernamePost=$this->input->post('userName',TRUE);
        if($userName==$usernamePost){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('nic', 'Nic', 'required');
            $this->form_validation->set_rules('phoneNumber', 'Phone Number', 'required|is_natural');
        }else {
            $this->form_validation->set_rules('userName', 'Username', 'required|is_unique[user.userName]');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('nic', 'Nic', 'required');
            $this->form_validation->set_rules('phoneNumber', 'Phone Number', 'required|is_natural');
        }

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('registeredUser/userProfile/userProfile');
        }
        else
        {
            $this->load->model('user_model');
            $responce=$this->user_model->updateUser();
            if($responce){
                $this->session->set_flashdata('msg','Edit successfully');
                $this->load->model('user_model');
                $resp=$this->user_model->getUserData();


               $userdata=array(
                    'userId'=>$resp->userId,
                    'userName'=>$resp->userName,
                    'name'=>$resp->name,
                    'nic'=>$resp->nic,
                    'phoneNumber'=>$resp->phoneNumber,
                    'status'=>$resp->status,
                    'loggedin'=>TRUE
                );
                $this->session->set_userdata($userdata);
                redirect('registeredUser/userProfile');
            }
            else{
                $this->session->set_flashdata('msg','something went wrong');
                redirect('registeredUser/userProfile');
            }
        }

    }
    public function editPassword()
    {
        $this->load->view('registeredUser/userProfile/editPassword/edit');

    }
    public function editPasswordFinal()
    {
        $this->form_validation->set_rules('preePassword', 'Previous Password', 'required');
        $this->form_validation->set_rules('newPassword', 'New Password', 'required');
        $this->form_validation->set_rules('conformPassword', 'Conform Password', 'required|matches[newPassword]');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('registeredUser/userProfile/editPassword/edit');
        }
        else
        {
            $this->load->model('user_model');
            $responce=$this->user_model->checkPreePassword();
            if($responce){
                $this->load->model('user_model');
                $resp=$this->user_model->editPassword();
                if($resp){
                    $this->session->set_flashdata('msg','edit Password successfully');
                }
                else{
                    $this->session->set_flashdata('msg','something went wrong');
                }

                redirect('registeredUser/editPassword');
            }
            else{
                $this->session->set_flashdata('msg','Previous Password is wrong');
                redirect('registeredUser/editPassword');
            }
        }

    }


}