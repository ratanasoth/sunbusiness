<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SlideshowModel extends CI_Model{
    
    private $slide = "slideshow";
    /*
     * This function is for add new slideshow
     * Author: Theary RIN
     */
    public function add_new_slideshow($data){
        
        $this->db->insert($this->slide,$data);
        return $this;
    }
    /*
     * This function is for selecting data slideshow
     * Author: Theary RIN
     */
    public function get_slideshow($id=null){
        
        $this->db->select("*");
        if ($id != NULL) {
            $this->db->where("{$this->slide}.slideshowid", $id);
        }
        $this->db->order_by("{$this->slide}.orderno", "asc");
        return $this->db->get($this->slide);
    }
    /*
     * This function is for editting slideshow
     * Author: Theary RIN
     */
    public function edit_slideshow($data,$slideshow_id){
        
        $this->db->where("{$this->slide}.slideshowid",$slideshow_id);
        $this->db->update($this->slide,$data);
        return $this;
    }
    /*
     * This function is for filtering data slideshow
     * Author: Theary RIN
     */
    public function filter_by_id($slideshow_id){
        
        $this->db->select("*");
        $this->db->where("{$this->slide}.slideshowid",$slideshow_id);
        return $this->db->get($this->slide)->row();
    }
    /*
     * This function is for deleting slideshow
     * Author: Theary RIN
     */
    public function delete_slideshow($slideshow_id){
        
        $get_partner = $this->filter_by_id($slideshow_id);
        $part_img = $get_partner->partimg;
        $img = $get_partner->img;
        unlink($part_img . $img);
        $this->db->where("{$this->slide}.slideshowid", $slideshow_id);
        $this->db->delete($this->slide);
        return $this;
    }
    public function getSlide()
    {
        $this->db->order_by('orderno','asc');
        $query = $this->db->get('slideshow');
        return $query->result();
    }
    // get welcome text from welcome table
    public function getWelcome(){
        return $this->db->get('welcome')->result();
    }
}