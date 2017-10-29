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
{
    $this->load->view('owner/admin_page');
}
public function loadBillView()
{
    //echo "loadBillView";
    $this->load->view('owner/Bill/Bill');
}
public function loadEditCustomersView()
{
    //echo "loadEditCustomersView";
    $this->load->view('owner/EditCustomers/Customers');
}
public function loadOrdersView()
{
    //echo "loadOrdersView";
    $this->load->view('owner/Orders/Orders');
}
public function loadEditMenuView()
{
    //echo "loadEditMenuView";
    $this->load->view('owner/EditMenu/Menu');
}

}