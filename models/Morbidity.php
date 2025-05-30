<?php
class Morbidity extends CI_Model{
    public function select_morbidity(){
        $sql = "SELECT * from morbidity";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>