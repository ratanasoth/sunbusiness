<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class NewsModel extends CI_Model{
    
    private $news = "news";
    /*
     * This function is for add new news
     * Author: Theary RIN
     */
    public function add_new_news($data){
        
        $this->db->insert($this->news,$data);
        return $this;
    }
    public function getNews(){
        $this->db->order_by('orderno','asc');
        return $this->db->get('news')->result();
    }
    /*
     * This function is for selecting data news
     * Author: Theary RIN
     */
    public function get_news($id=null){
        
        $this->db->select("*");
        if ($id != NULL) {
            $this->db->where("{$this->news}.newsid", $id);
        }
        $this->db->order_by("{$this->news}.orderno", "DESC");
        return $this->db->get($this->news);
    }
    /*
     * This function is for editting news
     * Author: Theary RIN
     */
    public function edit_news($data,$news_id){
        
        $this->db->where("{$this->news}.newsid",$news_id);
        $this->db->update($this->news,$data);
        return $this;
    }
    
    /*
     * This function is for deleting news
     * Author: Theary RIN
     */
    public function delete_news($news_id){
        
        $this->db->where("{$this->news}.newsid", $news_id);
        $this->db->delete($this->news);
        return $this;
    }

}