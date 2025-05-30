<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teacher extends CI_Controller
{
    public function select_attendance()
    {
        $this->load->view('temp/head.php');
    if($this->session->userdata('role') == 'руководитель организации'){
      redirect('main/index');
    }
    else if($this->session->userdata('role') == 'медицинская сестра'){
      redirect('main/index');
    }
    else if($this->session->userdata('role') == 'воспитатель'){
      $this->load->view('temp/nav_teacher.php');
    }
    else {
      redirect('main/index');
    }
        $this->load->model('attendance');
        $data['attendance'] = $this->attendance->table_attendance();
        $this->load->view('select_attendance.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function add_attendance()
    {
        $this->load->view('temp/head.php');
    if($this->session->userdata('role') == 'руководитель организации'){
      redirect('main/index');
    }
    else if($this->session->userdata('role') == 'медицинская сестра'){
      redirect('main/index');
    }
    else if($this->session->userdata('role') == 'воспитатель'){
      $this->load->view('temp/nav_teacher.php');
    }
    else {
      redirect('main/index');
    }
        $this->load->model('kids');
        $data['kids'] = $this->kids->select_kids();
        if (!empty($_POST)) {
            $data_attendance = $_POST['data_attendance'];
            $id_kid = $_POST['id_kid'];
            $this->load->model('attendance');
            $this->attendance->add_attendance($data_attendance, $id_kid);
        }
        $this->load->view('add_attendance.php', $data);
        $this->load->view('temp/footer.php');
    }
}
