<?php
class Kids extends CI_Model{
    public function select_kids(){
        $sql = "SELECT * from kids";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>