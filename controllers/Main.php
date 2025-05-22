<?php
class Main extends CI_Controller{
    public function index(){
        $this->load->view('temp/head.php');
        if($this->session->userdata('role') == 'Руководитель организации'){
            $this->load->view('temp/nav_leader.php');
        }
        else if($this->session->userdata('role') == 'Медицинская сестра'){
            $this->load->view('temp/nav_nurse.php');
        }
        else if($this->session->userdata('role') == 'Воспитатель'){
            $this->load->view('temp/nav_teacher.php');
        }
        else {
            $this->load->view('temp/nav.php');
        }
        $this->load->view('index.php');
        $this->load->view('temp/footer.php');
    }
}
?>