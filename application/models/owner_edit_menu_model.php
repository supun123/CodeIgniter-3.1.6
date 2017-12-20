<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 11/1/2017
 * Time: 9:31 PM
 */

class owner_edit_menu_model extends CI_Model
{
    /* Add data to the Database Data*/
    //------------------------------------------------------------
   public function GetMenuData ($mainCourse)
   {
       $this->db->where('mainCourse', $mainCourse);
       $this->db->where('menu','true');
       $query=$this->db->get('menu');
       return $query;
   }
   public function removeMenuData($foodid)
   {
       $data = array(
           'menu' => 'false'
       );

       $this->db->where('foodid', $foodid);
       $this->db->update('menu', $data);
   }
   public function GetPreeAvailableData($mainCourse)
   {
       $this->db->where('mainCourse', $mainCourse);
       $query=$this->db->get('menu');
       return $query;
   }
   public function  removePreeAvailableData($foodid){
       $this->db->where('foodid', $foodid);
       $this->db->delete('menu');
   }
 /*  public function isExist($id,$table)
   {
       $sql='SELECT * FROM `'.$table.'` WHERE id='.$id;
       $respond=$this->db->query($sql);
       if ($respond->num_rows()>0){
           return True;
       }else{
           return false;
       }
   }*/

  /*  public function selectDataFromPree_available($id,$table)
    {
        $sql='SELECT * FROM `'.$table.'` WHERE id='.$id;
        $respond=$this->db->query($sql);
        if ($respond->num_rows()==1){
            return $respond->row(0);
        }else{
            return false;
        }
    }*/
   public function addDataMenu($foodid)
   {

       $data = array(
           'menu' => 'true'
       );

       $this->db->where('foodid', $foodid);
       $this->db->update('menu', $data);
   }
   public function addPreeAvailableTable($mainCourse)
   {
       $data=array(
           'items'=>$this->input->post('name',TRUE),
           'price'=>$this->input->post('unitPrize',TRUE),
           'mainCourse'=>$mainCourse
       );

       return $this->db->insert('menu',$data);
   }
   //----------------------------------------------------------


}