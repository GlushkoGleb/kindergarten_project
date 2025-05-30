<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leader extends CI_Controller
{
    public function new_kid()
    {
        $this->load->view('temp/head.php');
        if($this->session->userdata('role') == 'руководитель организации'){
            $this->load->view('temp/nav_leader.php');
        }
        else if($this->session->userdata('role') == 'медицинская сестра'){
            redirect('main/index');
        }
        else if($this->session->userdata('role') == 'Воспитатель'){
            redirect('main/index');
        }
        else {
            redirect('main/vxod');
        }
        $this->load->model('groups');
        $data['groups'] = $this->groups->groups_select();
        $this->load->view('new_kid.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function add_kid()
    {
        if (!empty($_POST)) {
            $name_kid = $_POST['name_kid'];
            $age_kid = $_POST['age_kid'];
            $id_group = $_POST['id_group'];
            $this->load->model('kids');
            $this->kids->add_kid($name_kid, $age_kid, $id_group);
            redirect('leader/new_kid');
        }
    }
    public function table()
    {
        $this->load->view('temp/head.php');
        if($this->session->userdata('role') == 'руководитель организации'){
            $this->load->view('temp/nav_leader.php');
        }
        else if($this->session->userdata('role') == 'медицинская сестра'){
            redirect('main/index');
        }
        else if($this->session->userdata('role') == 'Воспитатель'){
            redirect('main/index');
        }
        else {
            redirect('main/vxod');
        }
        $this->load->model('kids');
        $data['table'] = $this->kids->table_morbidity();
        $this->load->view('table.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function delete(){
        if(!empty($_POST)){
            $id_accounting = $_POST['id_accounting'];
            $this->load->model('accounting');
            $this->accounting->delete_accounting($id_accounting);
            redirect('leader/table');
        }
    }
}
