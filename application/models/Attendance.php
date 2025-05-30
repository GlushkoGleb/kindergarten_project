<?php
class Attendance extends CI_Model
{
    public function table_attendance()
    {
        $sql = "SELECT attendance.id_attendance, kids.name_kid, kids.age_kid, groups.name_group, attendance.data_attendance FROM attendance, kids, groups WHERE attendance.id_kid = kids.id_kid and kids.id_group = groups.id_group";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    public function add_attendance($data_attendance, $id_kid)
    {
        $sql = "INSERT INTO attendance (data_attendance, id_kid) VALUES (?, ?)";
        $result = $this->db->query($sql, array($data_attendance, $id_kid));
        return $result;
    }
}
?>