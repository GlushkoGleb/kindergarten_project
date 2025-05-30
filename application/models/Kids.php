<?php
class Kids extends CI_Model
{
    public function add_kid($name_kid, $age_kid, $id_group) {
        $sql = "INSERT INTO kids (name_kid, age_kid, id_group) VALUES (?, ?, ?)";
        $result = $this->db->query($sql, array($name_kid, $age_kid, $id_group));
        return $result;
    }
    public function select_kids() {
        $sql = "SELECT * from kids";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    public function table_morbidity(){
        $sql = "SELECT accounting.id_accounting, kids.name_kid, kids.age_kid, groups.name_group, morbidity.name_morbidity, accounting.data_start, accounting.data_end from kids, groups, accounting, morbidity where accounting.id_kid = kids.id_kid and kids.id_group = groups.id_group and accounting.id_morbidity = morbidity.id_morbidity";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>