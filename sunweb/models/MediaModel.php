<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MediaModel
 *
 * @author Vongkol
 */
class MediaModel extends CI_Model {
    //put your code here
    public function getMedia(){
        return $this->db->get('media')->result();
    }
    public function insert($url,$name){
        $data=array(
            'url'=>$url,
            'name'=>$name
        );
        $this->db->insert('media',$data);
    }
    public function delete($id){
        $this->db->delete('media',array('id'=>$id));
    }
}
