<?php 

/**
* 
*/
class customer_model extends CI_Model
{
	
	public function getCustomerData()
    {
        // $query=$this->db->get('user');
        // return $query;

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('status','customer');
        $query=$this->db->get();
        return $query;
    }

    public function deleteCustomerData($id){
    	echo "$id";

        $this->db->where('userId',$id);
	   	$this->db->delete('user');
        // $this->db->from('user');
        echo "dsfgh";
        // $query=$this->db->get();
        // $_POST['deleteCus']
        // return $query;

    }

}

?>