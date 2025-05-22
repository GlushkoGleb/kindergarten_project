<?php
class Groups extends CI_Model{
    public function select_groups(){
        $sql = "SELECT * from groups";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>