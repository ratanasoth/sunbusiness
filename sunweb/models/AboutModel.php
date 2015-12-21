<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AboutModel extends CI_Model{
    
    private $t_about ="about";
    
   /*
    * This function is for getting data
    * Author: Theary RIN
    */
   public function get_about($id=NULL){
       
       $this->db->select("*");
       if($id !=NULL){
           $this->db->where("{$this->t_about}.aboutid",$id);
       }
       return $this->db->get($this->t_about);
   }
   public function getAbout(){
       $query = $this->db->get('about');
       return $query->result();
   }
   /**
    * this Function is for do update data about
    * Author: Theary RIN
    */
   public function do_edit_about($title,$des,$id){
       
       if ($id != NULL) {
            $this->db->where("{$this->t_about}.aboutid", $id);
        }

        $data_update = array(
            "title" => $title,
            "description" => $des
        );

        $this->db->update($this->t_about, $data_update);
        return $this;
    }
}