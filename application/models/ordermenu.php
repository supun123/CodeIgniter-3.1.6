<?php
/**
 * Created by PhpStorm.
 * User: maneesha
 * Date: 11/1/2017
 * Time: 4:02 PM
 */

class ordermenu extends CI_Model
{

    public function get_Order(){
	    $total_price=0;
		$this->db->select('userId');
		$this->db->from('user');
		$this->db->where('userName',$_SESSION['userName']);
	    $query1 = $this->db->get();
	    $data1 = $query1->result_array();
	   // echo $data1[0]['id'];

	    $main = $this->input->post('item',TRUE);
	    $quantity = $this->input->post('size',TRUE);
	    $price = $this->input->post('price',TRUE);


	    if($quantity ==1){
	    	$total_price = $price;
	    }
	    elseif ($quantity==2){
	    	$total_price = $price*2;
	    }
	    elseif ($quantity==3){
		    $total_price = $price*3;
	    }
	    elseif ($quantity==4){
		    $total_price = $price*4;
	    }
	    elseif ($quantity==5){
		    $total_price = $price*5;
	    }

    	$data=array(
    		'item'=>$main,
		    'side_item'=>$this->input->post('side',TRUE),
		    'quantity'=>$quantity,
		    'price'=>$total_price,
		    'food_id'=>$this->input->post('id',TRUE),
		    'user_id'=>$data1[0]['userId']


	    );

	    return $this->db->insert('cart',$data);
    }

    public function makeOrder1() { //for the total price
	    $this->db->select( 'userId' );
	    $this->db->from( 'user' );
	    $this->db->where( 'userName', $_SESSION['userName'] );
	    $query1 = $this->db->get();
	    $data1  = $query1->result_array();
	    $id     = $data1[0]['userId'];

	    $this->db->select_sum( 'price' );
	    $this->db->from( 'cart' );
	    $this->db->where( 'user_id', $id );
	    $query = $this->db->get();

	    return $query->result_array();
	    //print_r($data['res1']);
    }

    public function makeOrder2(){ //for the number of orders
	    $this->db->select( 'userId' );
	    $this->db->from( 'user' );
	    $this->db->where( 'userName', $_SESSION['userName'] );
	    $query1 = $this->db->get();
	    $data1  = $query1->result_array();
	    $id     = $data1[0]['userId'];

	    $this->db->select('*');
	    $this->db->from('cart');
	    $this->db->where('user_id',$id);
	    $query = $this->db->get();
	    return $query->num_rows();
	    //print_r($data['res2']);

    	//print_r($data[0]);

    }
    public function cartItem(){
	    $this->db->select( 'userId' );
	    $this->db->from( 'user' );
	    $this->db->where( 'userName', $_SESSION['userName'] );
	    $query1 = $this->db->get();
	    $data1  = $query1->result_array();
	    $id     = $data1[0]['userId'];

    	$this->db->select('*');
	    $this->db->from( 'cart' );
	    $this->db->where('user_id',$id);
	    $query2 = $this->db->get();

	    return $query2->result_array();
    }

}
?>