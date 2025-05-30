<?php
class Users_model extends CI_Model
{
    public function ins_users($fio, $telephone, $email, $login, $password, $role)
    {
        $sql = "INSERT INTO `users`(fio, telephone, email, login, password, role)  VALUES(?, ?, ?, ?, ?, ?)";
        $result = $this->db->query($sql, array($fio, $telephone, $email, $login, $password, $role));
        return $this->db->insert_id();
    }
    public function sel_users($login, $password)
    {
        $sql = 'SELECT  * FROM `users` WHERE  login = ? AND password = ?';
        $result = $this->db->query($sql, array($login, $password));
        return $result->row_array();
    }
}
?>