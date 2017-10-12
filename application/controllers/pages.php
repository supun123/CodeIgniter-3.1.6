<?php
/**
 * Created by PhpStorm.
 * User: maneesha
 * Date: 10/8/2017
 * Time: 12:33 PM
 */
class pages extends CI_Controller {
    public function view($page = 'home_page'){ //default
        //view exist
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }
//data array-> the variables we want to pass into the view
        $data['title'] = ucfirst($page); //to begin with a capital letter

        //load the header.php and footer.php
        $this->load->view('partials/header');
        $this->load->view('pages/'.$page, $data);

        $this->load->view('register');
        $this->load->view('partials/footer');
        //$this->load->view('register');
        //localhost/UCSCCanteen/pages/view/about ->to get rid of view goto config->route
        //new url
        //localhost/your filename in htdocs/and the page name inside the pages folder
    }
}
?>