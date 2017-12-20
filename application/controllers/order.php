<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/26/2017
 * Time: 12:55 AM
 */

class order extends CI_Controller{

    public function makeOrder() {
	    $this->load->model('menu'); //load the name of the model
	    $data['records1'] = $this->menu->getBreakfast(); //
	    $data['records2'] = $this->menu->getLunch();
	    $data['records3'] = $this->menu->getEvening();
	    $data['records4'] = $this->menu->getShorteats();
	    $data['records5'] = $this->menu->getBeverages();

	    $this->load->view( 'registeredUser/makeorder',$data );


    }

    public function  get_Order(){


		$this->load->model('ordermenu');
		$response = $this->ordermenu->get_Order();

		$data['res1'] = $this->ordermenu->makeOrder1();
		$data['res2'] = $this->ordermenu->makeOrder2();
		$data['res3'] = $this->ordermenu->cartItem();

		//print_r($data['res1']);
	    //print_r($data['res2']);

	    $this->load->model('menu'); //load the name of the model
	    $data['records1'] = $this->menu->getBreakfast();
	    $data['records2'] = $this->menu->getLunch();
	    $data['records3'] = $this->menu->getEvening();
	    $data['records4'] = $this->menu->getShorteats();
	    $data['records5'] = $this->menu->getBeverages();


	    $this->load->view( 'registeredUser/makeorder',$data );

		/*if($re){
			echo "success";
		}
		else{
			echo "failed";
		}*/

    }
}