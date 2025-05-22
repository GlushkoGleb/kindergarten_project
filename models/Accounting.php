<?php
class Accounting extends CI_Model{
    public function report_morbidity_log($month){
        $sql = "select accounting.id_accounting, kids.name_kid, kids.age_kid, accounting.diagnosis, accounting.data_start, accounting.data_end from accounting, kids WHERE accounting.id_kid = kids.id_kid and DATE_FORMAT(accounting.data_start, '%Y-%m') = ?";
        $result = $this->db->query($sql, array($month));
        return $result->result_array();
    }
    public function count_morbidity_log($month){
        $sql = "select count(id_accounting) from accounting where DATE_FORMAT(accounting.data_start, '%Y-%m') = ?";
        $result = $this->db->query($sql, array($month));
        return $result->result_array();
    }
    public function add_accounting($id_kid, $diagnosis, $data_start, $data_end){
        $sql = "INSERT INTO accounting (id_kid, diagnosis, data_start, data_end) VALUES (?, ?, ?, ?)";
        $result = $this->db->query($sql, array($id_kid, $diagnosis, $data_start, $data_end));
        return $result;
    }
    public function lists_children($id_group){
        $sql = "select kids.name_kid, accounting.diagnosis, accounting.data_start, accounting.data_end from kids, accounting, groups where accounting.id_kid = kids.id_kid and kids.id_group = groups.id_group and kids.id_group = ?";
        $result = $this->db->query($sql, $id_group);
        return $result->result_array();
    }
}
?>