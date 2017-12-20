<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/26/2017
 * Time: 12:55 AM
 */

class feedback extends CI_Controller{

    public function makeOrder(){
       // $result=$this->input->post('feedback');
       // $this->form_validation->set_rules('feedback','Feedback','required');
        $this->form_validation->set_rules('feedback','feedback ','required|max_length[50]');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('registeredUser/dashboard');
        }else{
            //echo 'pass';
            $this->load->model('user_model');
            $this->user_model->addFeedBack();
            redirect('registeredUser/index');
        }
    /*if(empty($result)){
            redirect('registeredUser/index');
    }else{

    }
*/
    }

}