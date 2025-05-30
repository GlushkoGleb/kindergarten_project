<?php
class Main extends CI_Controller
{
  public function index()
  {
    $this->load->view('temp/head.php');
    if($this->session->userdata('role') == 'руководитель организации'){
      $this->load->view('temp/nav_leader.php');
    }
    else if($this->session->userdata('role') == 'медицинская сестра'){
      $this->load->view('temp/nav_nurse.php');
    }
    else if($this->session->userdata('role') == 'воспитатель'){
      $this->load->view('temp/nav_teacher.php');
    }
    else {
      $this->load->view('temp/nav.php');
    }
    $this->load->view('index.php');
    $this->load->view('temp/footer.php');
  }
  public function reg()
  {
    $this->load->view('temp/head.php');
    if($this->session->userdata('role') == 'руководитель организации'){
      redirect('main/index');
    }
    else if($this->session->userdata('role') == 'медицинская сестра'){
      redirect('main/index');
    }
    else if($this->session->userdata('role') == 'воспитатель'){
      redirect('main/index');
    }
    else {
      $this->load->view('temp/nav.php');
    }
    $this->load->view('registrations.php');
    $this->load->view('temp/footer.php');
  }
  public function reg_db()
  {
    if (!empty($_POST)) {
      $fio = $_POST['fio'];
      $telephone = $_POST['telephone'];
      $email = $_POST['email'];
      $login = $_POST['login'];
      $password = $_POST['password'];
      $role = $_POST['role'];
      $this->load->model('users_model');
      $this->users_model->ins_users($fio, $telephone, $email, $login, $password, $role);
      redirect('main/vxod');
    }
  }
  public function vxod()
  {
    $this->load->view('temp/head.php');
    if($this->session->userdata('role') == 'руководитель организации'){
      redirect('main/index');
    }
    else if($this->session->userdata('role') == 'медицинская сестра'){
      redirect('main/index');
    }
    else if($this->session->userdata('role') == 'воспитатель'){
      redirect('main/index');
    }
    else {
      $this->load->view('temp/nav.php');
    }
    $this->load->view('vxodik.php');
    $this->load->view('temp/footer.php');
  }
  public function vxod_db()
  {
    if (!empty($_POST)) {
      $login = $_POST['login'];
      $password = $_POST['password'];
      $this->load->model('users_model');
      $users = $this->users_model->sel_users($login, $password);
      if (!empty($users)) {
        $this->session->set_userdata($users);
        if($this->session->userdata('role') == 'руководитель организации'){
            redirect('leader/table');
        }
        else if($this->session->userdata('role') == 'медицинская сестра'){
            redirect('nurse/morbidity_log');
        }
        else if($this->session->userdata('role') == 'воспитатель'){
            redirect('teacher/select_attendance');
        }
        else {
            redirect('main/index');
        }
      } else {
        echo 'Не верный логин и пароль';
      }
    }
  }
  public function logout()
  {
    session_destroy();
    redirect('main/index');
  }
}
