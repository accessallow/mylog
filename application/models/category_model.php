<?php
class category_tags{
    static $available = 1;
    static $deleted = 0;
}

class category_model extends CI_Model {

    var $category_name = "";
    var $user = "";
    var $tag = "";
    
    public function __construct() {
        $this->load->database();
    }
    public function add_new_category($category_name){
        $this->category_name = $category_name;
        $this->user = $user;
        $this->tag = category_tags::$available;
        $this->db->insert('link_category',$this);
    }
    public function edit_category($id,$category_name,$user){
        $this->category_name = $category_name;
        $this->user = $user;
        $this->tag = category_tags::$available;
        $this->db->update('link_category',$this,array('id'=>$id));
    }
    public function delete($id){
        $data = array('tag'=>  category_tags::$deleted);
        $this->db->update('link_category',$data,array('id'=>$id));
    }
    public function get_all(){
        $query = $this->db->get('link_category');
        return $query->result();
    }
    

}

?>
