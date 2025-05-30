<?php
class Groups extends CI_Model
{
    public function groups_select()
    {
        $sql = "SELECT * FROM groups";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>