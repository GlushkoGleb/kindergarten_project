<?php
class Accounting extends CI_Model{
    public function report_morbidity_log($month){
        $sql = "select accounting.id_accounting, kids.name_kid, kids.age_kid, morbidity.name_morbidity, accounting.data_start, accounting.data_end from accounting, kids, morbidity WHERE accounting.id_kid = kids.id_kid and accounting.id_morbidity = morbidity.id_morbidity and DATE_FORMAT(accounting.data_start, '%Y-%m') = ?";
        $result = $this->db->query($sql, array($month));
        return $result->result_array();
    }
    public function count_morbidity_log($month){
        $sql = "select count(id_accounting) from accounting where DATE_FORMAT(accounting.data_start, '%Y-%m') = ?";
        $result = $this->db->query($sql, array($month));
        return $result->result_array();
    }
    public function add_accounting($id_kid, $id_morbidity, $data_start, $data_end){
        $sql = "INSERT INTO accounting (id_kid, id_morbidity, data_start, data_end) VALUES (?, ?, ?, ?)";
        $result = $this->db->query($sql, array($id_kid, $id_morbidity, $data_start, $data_end));
        return $result;
    }
    public function lists_children($id_group){
        $sql = "select kids.name_kid, morbidity.name_morbidity, accounting.data_start, accounting.data_end from kids, accounting, morbidity, groups where accounting.id_kid = kids.id_kid and kids.id_group = groups.id_group and accounting.id_morbidity = morbidity.id_morbidity and kids.id_group = ?";
        $result = $this->db->query($sql, $id_group);
        return $result->result_array();
    }
    public function morbidity_analysis($data_start, $data_end){
        $sql = "select morbidity.name_morbidity, count(accounting.id_accounting), sum(DATEDIFF(accounting.data_end, accounting.data_start)), count(accounting.id_kid) from morbidity, accounting where accounting.id_morbidity = morbidity.id_morbidity and accounting.data_start BETWEEN ? and ? GROUP BY morbidity.name_morbidity";
        $result = $this->db->query($sql, array($data_start, $data_end));
        return $result->result_array();
    }
    public function analysis_children($data_start, $data_end){
        $sql = "SELECT groups.id_group, COUNT(accounting.id_accounting) * 100 / (SELECT COUNT(*) from kids where kids.id_group = groups.id_group) from groups, accounting, kids WHERE accounting.id_kid = kids.id_kid and kids.id_group = groups.id_group and accounting.data_start BETWEEN ? and ? GROUP BY groups.id_group";
        $result = $this->db->query($sql, array($data_start, $data_end));
        return $result->result_array();
    }
}
?>