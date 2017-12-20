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
    $num['numOFcustomers']=$this->getNumberOfcustomers();
    $this->load->view('owner/admin_page',$num);

}
public function loadBillView()
{
    //echo "loadBillView";
    $this->load->view('owner/Bill/Bill');
}/* loadEditCustomersView*/
public function loadEditCustomersView()
{
    $this->load->model('customer_model');
    $this->load->model('order_model');
    $data['feedback']=$this->order_model->getOrderData();
    $data['customer']=$this->customer_model->getCustomerData();
    $this->load->view('owner/EditCustomers/Customers',$data);

    //$this->load->view('owner/EditCustomers/Customers');
}public function deleteCustomer($id){
    echo $id;

    $this->load->model('customer_model');
    $this->customer_model->deleteCustomerData($id);
    $data['customer']=$this->customer_model->getCustomerData();
    $this->load->view('owner/EditCustomers/Customers',$data);
}
public function loadOrdersView()
{
    $this->load->model('order_model');
    $data['feedback']=$this->order_model->getOrderData();
    $data['order']=$this->order_model->getOrderDataA();
    $data['sms']=false;
    $this->load->view('owner/Orders/Orders',$data);
}
public function loadEditMenuView()
{

    $this->load->view('owner/EditMenu/Menu');
}
    /* Short Eats */
//-----------------------------------

    /* load  Short Eats view*/
    public function ShortEats()
    {
        $this->load->model('owner_edit_menu_model');
        $data['ShortEats']=$this->owner_edit_menu_model->GetMenuData('shorteats');
        $data['preeAvailables']=$this->owner_edit_menu_model->GetPreeAvailableData('shorteats');
        $this->load->view('owner/EditMenu/ShortEats/Menu',$data);
    }

    /* remove shorte eate data from database*/
    public function removeShortEatData()
    {
        $Id=$this->uri->segment(3);
        $this->load->model('owner_edit_menu_model');
        $this->owner_edit_menu_model->removeMenuData($Id);
        redirect('owner/ShortEats');
    }
    public function removePreeAvailablesShortEatData()
    {
        $Id=$this->uri->segment(3);
        $this->load->model('owner_edit_menu_model');
        $this->owner_edit_menu_model->removePreeAvailableData($Id);
        redirect('owner/ShortEats');
    }
    public function addDataMenu()
    {
        $this->load->model('owner_edit_menu_model');
        $Id=$this->uri->segment(3);
        $this->owner_edit_menu_model->addDataMenu($Id);
        redirect('owner/ShortEats');

    }
    public function addShortEats()
    {
        $this->form_validation->set_rules('name', 'Short Eats Name', 'required|is_unique[menu.items]');
       // $this->form_validation->set_rules('name', 'Short Eats Name ', '');
        $this->form_validation->set_rules('unitPrize', 'Unit Prize', 'required|is_natural');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->model('owner_edit_menu_model');
            $data['ShortEats']=$this->owner_edit_menu_model->GetMenuData('shorteats');
            $data['preeAvailables']=$this->owner_edit_menu_model->GetPreeAvailableData('shorteats');
            $this->load->view('owner/EditMenu/ShortEats/Menu',$data);

        }else{
            $this->load->model('owner_edit_menu_model');
            $responce=$this->owner_edit_menu_model->addPreeAvailableTable('shorteats');
            if($responce){
                $this->session->set_flashdata('msg','add  Short Eat successfully');
                redirect('owner/ShortEats');
            }
            else{
                $this->session->set_flashdata('msg','something went wrong');
                redirect('owner/ShortEats');
            }
        }

    }
    /* load  breakfast  */
    //---------------------------------------------------------
    /* load  breakfast view*/
    public function breakfast()
    {
        $this->load->model('owner_edit_menu_model');
        $data['breakfast']=$this->owner_edit_menu_model->GetMenuData('breakfast');
        $data['preeAvailables']=$this->owner_edit_menu_model->GetPreeAvailableData('breakfast');
        $this->load->view('owner/EditMenu/breakfast/Menu',$data);
    }

    /* remove Main meal data from database*/
    public function removebreakfastData()
    {
        $Id=$this->uri->segment(3);
        $this->load->model('owner_edit_menu_model');
        $this->owner_edit_menu_model->removeMenuData($Id);
        redirect('owner/breakfast');
    }
    public function removePreeAvailablesbreakfastData()
    {
        $Id=$this->uri->segment(3);
        $this->load->model('owner_edit_menu_model');
        $this->owner_edit_menu_model->removePreeAvailableData($Id);
        redirect('owner/breakfast');
    }
    public function addDatabreakfastMenu()
    {
        $this->load->model('owner_edit_menu_model');
        $Id=$this->uri->segment(3);
        $this->owner_edit_menu_model->addDataMenu($Id);
        redirect('owner/breakfast');

    }
    public function addBreakfast()
    {
        $this->form_validation->set_rules('name', 'Short Eats Name', 'required|is_unique[menu.items]');
        // $this->form_validation->set_rules('name', 'Short Eats Name ', '');
        $this->form_validation->set_rules('unitPrize', 'Unit Prize', 'required|is_natural');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->model('owner_edit_menu_model');
            $data['breakfast']=$this->owner_edit_menu_model->GetMenuData('breakfast');
            $data['preeAvailables']=$this->owner_edit_menu_model->GetPreeAvailableData('breakfast');
            $this->load->view('owner/EditMenu/breakfast/Menu',$data);

        }else{
            $this->load->model('owner_edit_menu_model');
            $responce=$this->owner_edit_menu_model->addPreeAvailableTable('breakfast');
            if($responce){
                $this->session->set_flashdata('msg','Add  Breakfast Successfully');
                redirect('owner/breakfast');
            }
            else{
                $this->session->set_flashdata('msg','Something Went Wrong');
                redirect('owner/breakfast');
            }
        }

    }

    //----------------------------------------------------------
    /* SideItem */
    //----------------------------------------------------------
    /* load  SideItem view*/
    public function SideItem()
    {
        $this->load->model('owner_edit_menu_model');
        $data['breakfast']=$this->owner_edit_menu_model->GetMenuData('menu_side_item');
        $data['preeAvailables']=$this->owner_edit_menu_model->GetPreeAvailableData('free_available_side_item');
        $this->load->view('owner/EditMenu/SideItem/Menu',$data);
    }
    public function removeSideItemData()
    {
        $Id=$this->uri->segment(3);
        $this->load->model('owner_edit_menu_model');
        $this->owner_edit_menu_model->removeMenuData($Id,'menu_side_item');
        redirect('owner/SideItem');
    }
    public function removeFreeAvailablesSideItemData()
    {
        $Id=$this->uri->segment(3);
        $this->load->model('owner_edit_menu_model');
        $this->owner_edit_menu_model->removePreeAvailableData($Id,'free_available_side_item');
        redirect('owner/SideItem');
    }
    public function addDataSideItemMenu()
    {
        $this->load->model('owner_edit_menu_model');
        $Id=$this->uri->segment(3);
        $result = $this->owner_edit_menu_model->isExist($Id,'menu_side_item');

        if($result == FALSE){
            $result = $this->owner_edit_menu_model->selectDataFromPree_available($Id,'free_available_side_item');
            $this->owner_edit_menu_model->addDataMenu($result,'menu_side_item');
            redirect('owner/SideItem');
        }
        else{
            redirect('owner/SideItem');
        }
    }
    public function addSideItem()
    {
        $this->form_validation->set_rules('name', 'Short Eats Name', 'required|is_unique[free_available_side_item.name]');
        // $this->form_validation->set_rules('name', 'Short Eats Name ', '');
        $this->form_validation->set_rules('unitPrize', 'Unit Prize', 'required|is_natural');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->model('owner_edit_menu_model');
            $data['ShortEats']=$this->owner_edit_menu_model->GetMenuData('menu_side_item');
            $data['preeAvailables']=$this->owner_edit_menu_model->GetPreeAvailableData('free_available_side_item');
            $this->load->view('owner/EditMenu/sideItem/Menu',$data);

        }else{
            $this->load->model('owner_edit_menu_model');
            $responce=$this->owner_edit_menu_model->addPreeAvailableTable('free_available_side_item');
            if($responce){
                $this->session->set_flashdata('msg','Add  Side Item Successfully');
                redirect('owner/SideItem');
            }
            else{
                $this->session->set_flashdata('msg','Something Went Wrong');
                redirect('owner/SideItem');
            }
        }
    }
    //------------------------------------------------------------------------
    /*Drinks */
    //------------------------------------------------------------------------
    /* load  Drinks view*/
    public function Drinks()
    {
        $this->load->model('owner_edit_menu_model');
        $data['Drinks']=$this->owner_edit_menu_model->GetMenuData('beverages');
        $data['preeAvailables']=$this->owner_edit_menu_model->GetPreeAvailableData('beverages');
        $this->load->view('owner/EditMenu/Drinks/Menu',$data);
    }
    public function removeDrinksData()
    {
        $Id=$this->uri->segment(3);
        $this->load->model('owner_edit_menu_model');
        $this->owner_edit_menu_model->removeMenuData($Id);
        redirect('owner/Drinks');
    }
    public function removeFreeAvailablesDrinksData()
    {
        $Id=$this->uri->segment(3);
        $this->load->model('owner_edit_menu_model');
        $this->owner_edit_menu_model->removePreeAvailableData($Id);
        redirect('owner/Drinks');
    }
    public function addDataDrinksMenu()
    {
        $this->load->model('owner_edit_menu_model');
        $Id=$this->uri->segment(3);
        $this->owner_edit_menu_model->addDataMenu($Id);
        redirect('owner/Drinks');

    }
    public function addDrinks()
    {
        $this->form_validation->set_rules('name', 'Short Eats Name', 'required|is_unique[menu.items]');
        // $this->form_validation->set_rules('name', 'Short Eats Name ', '');
        $this->form_validation->set_rules('unitPrize', 'Unit Prize', 'required|is_natural');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->model('owner_edit_menu_model');
            $data['Drinks']=$this->owner_edit_menu_model->GetMenuData('beverages');
            $data['preeAvailables']=$this->owner_edit_menu_model->GetPreeAvailableData('beverages');
            $this->load->view('owner/EditMenu/Drinks/Menu',$data);

        }else{
            $this->load->model('owner_edit_menu_model');
            $responce=$this->owner_edit_menu_model->addPreeAvailableTable('beverages');
            if($responce){
                $this->session->set_flashdata('msg','Add  Cool drink Successfully');
                redirect('owner/Drinks');
            }
            else{
                $this->session->set_flashdata('msg','Something Went Wrong');
                redirect('owner/Drinks');
            }
        }
    }
    //------------------------------------------------------------------------
    /*Yogurt */
    //------------------------------------------------------------------------
    /* load  Yogurt view*/
    public function Yogurt()
    {
        $this->load->model('owner_edit_menu_model');
        $data['Yogurt']=$this->owner_edit_menu_model->GetMenuData('yogurt');
        $data['preeAvailables']=$this->owner_edit_menu_model->GetPreeAvailableData('yogurt');
        $this->load->view('owner/EditMenu/Yogurt/Menu',$data);
    }
    public function removeYogurtData()
    {
        $Id=$this->uri->segment(3);
        $this->load->model('owner_edit_menu_model');
        $this->owner_edit_menu_model->removeMenuData($Id);
        redirect('owner/Yogurt');
    }
    public function removeFreeAvailablesYogurtData()
    {
        $Id=$this->uri->segment(3);
        $this->load->model('owner_edit_menu_model');
        $this->owner_edit_menu_model->removePreeAvailableData($Id);
        redirect('owner/Yogurt');
    }
    public function addDataYogurtMenu()
    {
        $this->load->model('owner_edit_menu_model');
        $Id=$this->uri->segment(3);
        $this->owner_edit_menu_model->addDataMenu($Id);
        redirect('owner/Yogurt');

    }
    public function addYogurt()
    {
        $this->form_validation->set_rules('name', 'Yogurt Name', 'required|is_unique[menu.items]');
        // $this->form_validation->set_rules('name', 'Short Eats Name ', '');
        $this->form_validation->set_rules('unitPrize', 'Unit Prize', 'required|is_natural');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->model('owner_edit_menu_model');
            $data['Yogurt']=$this->owner_edit_menu_model->GetMenuData('yogurt');
            $data['preeAvailables']=$this->owner_edit_menu_model->GetPreeAvailableData('yogurt');
            $this->load->view('owner/EditMenu/Yogurt/Menu',$data);

        }else{
            $this->load->model('owner_edit_menu_model');
            $responce=$this->owner_edit_menu_model->addPreeAvailableTable('yogurt');
            if($responce){
                $this->session->set_flashdata('msg','Add  yogurt Successfully');
                redirect('owner/Yogurt');
            }
            else{
                $this->session->set_flashdata('msg','Something Went Wrong');
                redirect('owner/Yogurt');
            }
        }
    }

    //------------------------------------------------------------------------
    /*lunch */
    //------------------------------------------------------------------------
    /* load  lunch view*/
    public function lunch()
    {
        $this->load->model('owner_edit_menu_model');
        $data['lunch']=$this->owner_edit_menu_model->GetMenuData('lunch');
        $data['preeAvailables']=$this->owner_edit_menu_model->GetPreeAvailableData('lunch');
        $this->load->view('owner/EditMenu/lunch/Menu',$data);
    }
    public function removeLunchData()
    {
        $Id=$this->uri->segment(3);
        $this->load->model('owner_edit_menu_model');
        $this->owner_edit_menu_model->removeMenuData($Id);
        redirect('owner/lunch');
    }
    public function removeFreeAvailablesLunchData()
    {
        $Id=$this->uri->segment(3);
        $this->load->model('owner_edit_menu_model');
        $this->owner_edit_menu_model->removePreeAvailableData($Id);
        redirect('owner/lunch');
    }
    public function addDataLunchMenu()
    {
        $this->load->model('owner_edit_menu_model');
        $Id=$this->uri->segment(3);
        $this->owner_edit_menu_model->addDataMenu($Id);
        redirect('owner/lunch');


    }
    public function addLunch()
    {
        $this->form_validation->set_rules('name', 'lunch Name', 'required|is_unique[menu.items]');
        // $this->form_validation->set_rules('name', 'Short Eats Name ', '');
        $this->form_validation->set_rules('unitPrize', 'Unit Prize', 'required|is_natural');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->model('owner_edit_menu_model');
            $data['lunch']=$this->owner_edit_menu_model->GetMenuData('lunch');
            $data['preeAvailables']=$this->owner_edit_menu_model->GetPreeAvailableData('lunch');
            $this->load->view('owner/EditMenu/lunch/Menu',$data);

        }else{
            $this->load->model('owner_edit_menu_model');
            $responce=$this->owner_edit_menu_model->addPreeAvailableTable('lunch');
            if($responce){
                $this->session->set_flashdata('msg','Add  lunch Successfully');
                redirect('owner/lunch');
            }
            else{
                $this->session->set_flashdata('msg','Something Went Wrong');
                redirect('owner/lunch');
            }
        }
    }
    //------------------------------------------------------------------------
/* Evening*/
    //------------------------------------------------------------------------
    public function evening()
    {
        $this->load->model('owner_edit_menu_model');
        $data['evening']=$this->owner_edit_menu_model->GetMenuData('evening');
        $data['preeAvailables']=$this->owner_edit_menu_model->GetPreeAvailableData('evening');
        $this->load->view('owner/EditMenu/evening/Menu',$data);
    }
    public function removeEveningData()
    {
        $Id=$this->uri->segment(3);
        $this->load->model('owner_edit_menu_model');
        $this->owner_edit_menu_model->removeMenuData($Id);
        redirect('owner/evening');
    }
    public function removeFreeAvailablesEveningData()
    {
        $Id=$this->uri->segment(3);
        $this->load->model('owner_edit_menu_model');
        $this->owner_edit_menu_model->removePreeAvailableData($Id);
        redirect('owner/evening');
    }
    public function addDataEveningMenu()
    {
        $this->load->model('owner_edit_menu_model');
        $Id=$this->uri->segment(3);
        $this->owner_edit_menu_model->addDataMenu($Id);
        redirect('owner/evening');


    }
    public function addevEning()
    {
        $this->form_validation->set_rules('name', ' Name', 'required|is_unique[menu.items]');
        // $this->form_validation->set_rules('name', 'Short Eats Name ', '');
        $this->form_validation->set_rules('unitPrize', 'Unit Prize', 'required|is_natural');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->model('owner_edit_menu_model');
            $data['evening']=$this->owner_edit_menu_model->GetMenuData('evening');
            $data['preeAvailables']=$this->owner_edit_menu_model->GetPreeAvailableData('evening');
            $this->load->view('owner/EditMenu/evening/Menu',$data);

        }else{
            $this->load->model('owner_edit_menu_model');
            $responce=$this->owner_edit_menu_model->addPreeAvailableTable('evening');
            if($responce){
                $this->session->set_flashdata('msg','Add  evening Successfully');
                redirect('owner/evening');
            }
            else{
                $this->session->set_flashdata('msg','Something Went Wrong');
                redirect('owner/evening');
            }
        }
    }

    //-------------------------------------------------------------------------

    public function buttonRun ()
    {
        $userId=$this->uri->segment(3);
        $order_id=$this->uri->segment(4);
        $food_id=$this->uri->segment(5);
        $actor=$this->uri->segment(6);

        $this->load->model('order_model');

        $this->order_model->updateActorAttributeA($userId,$order_id,$food_id,$actor);
    //    $this->load->view('smsApi/sendSms');
        if($actor=='true'){
            $this->load->model('order_model');
            $data['feedback'] = $this->order_model->getOrderData();
            $data['order'] = $this->order_model->getOrderDataA();
            $data['sms'] = True;
            $data['act'] = True;
            $data['userdata'] = $this->order_model->getUserData($userId);


            $this->load->view('owner/Orders/Orders', $data);
        }else {
            $this->load->model('order_model');
            $data['feedback'] = $this->order_model->getOrderData();
            $data['order'] = $this->order_model->getOrderDataA();
            $data['sms'] = True;
            $data['act'] = false;
            $data['userdata'] = $this->order_model->getUserData($userId);

            $this->load->view('owner/Orders/Orders', $data);
        }
       //
        //echo "buttonRun",$x,$y,$z;
        // $userId=$this->uri->segment(3);

    }
    public function getNumberOfcustomers(){
        $this->load->model('order_model');
        $num=$this->order_model->getNumberOfCustomers();
        return $num;
    }


}