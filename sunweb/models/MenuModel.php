<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenuModel
 *
 * @author Vongkol
 */
class MenuModel extends CI_Model{
    //put your code here
    // get only main menu
    public function getMainMenu(){
        $this->db->order_by('orderno','asc');
        $query = $this->db->get_where('menu',array('type'=>'main'));
        return $query->result();
    }
    // count sub menu of a parent
    public function countSub($pid){
        $query = $this->db->get_where('menu',array('parentid'=>$pid));
        return count($query->result());
    }
    // get sub menus by its parent id
    public function getSubMenu(){
        $query = $this->db->get_where('menu',array('type'=>'sub'));
        return $query->result();
    }
    // get main menu
    public function getMenu()
    {
        $this->db->order_by('id','asc');
        $query = $this->db->get('menu');
        return $query->result();
    }
    // delete a menu by its id
    public function delete($id)
    {
        $this->db->delete('menu',array('id'=>$id));
    }
    // save new menu to the database
    public function insert()
    {
        $name = $this->input->post('menuname');
        $url = $this->input->post('url');
        $type = $this->input->post('type');
        $child = $this->input->post('child');
        $orderno = $this->input->post('orderno');
        $data = array(
            'name'=>$name,
            'url'=>$url,
            'type'=>$type,
            'parentid'=>$child,
            'orderno'=>$orderno
        );
        $result = $this->db->insert('menu',$data);
        return $result;
    }
    // get menu by its id
    public function getMenuById($id){
        $query = $this->db->get_where('menu',array('id'=>$id));
        return $query->result();
    }
    public function edit(){
        $id = $this->input->post('id');
        $name = $this->input->post('menuname');
        $url = $this->input->post('url');
        $type = $this->input->post('type');
        $child = $this->input->post('child');
        $orderno = $this->input->post('orderno');
        $data = array(
            'name'=>$name,
            'url'=>$url,
            'type'=>$type,
            'parentid'=>$child,
            'orderno'=>$orderno
        );
        $this->db->where('id',$id);
        $this->db->update('menu',$data);
    }
    // get menu by its type
    public function getMenuByType($type){
        $query = "";
        if($type=='all'){
            $query = $this->db->get("menu");
        }
        else{
            $query=$this->db->get_where('menu',array('type'=>$type));
        }
        return $query->result();
    }
}
