<?php
class Nurse extends CI_Controller{
    public function panel_nurse(){
        $this->load->view('temp/head.php');
        if($this->session->userdata('role') == 'Руководитель организации'){
            redirect('main/index.php');
        }
        else if($this->session->userdata('role') == 'Медицинская сестра'){
            $this->load->view('temp/nav_nurse.php');
        }
        else if($this->session->userdata('role') == 'Воспитатель'){
            redirect('main/index.php');
        }
        else {
            redirect('main/login.php');
        }
        $this->load->view('index.php');
        $this->load->view('temp/footer.php');
    }
    public function morbidity_log(){
        $this->load->view('temp/nav_nurse.php');
        $this->load->view('temp/head.php');
        // if($this->session->userdata('role') == 'Руководитель организации'){
        //     redirect('main/index.php');
        // }
        // else if($this->session->userdata('role') == 'Медицинская сестра'){
        //     $this->load->view('temp/nav_nurse.php');
        // }
        // else if($this->session->userdata('role') == 'Воспитатель'){
        //     redirect('main/index.php');
        // }
        // else {
        //     redirect('main/login.php');
        // }
        $data['result'] = array();
        $data['count'] = array();
        $this->load->model('accounting');
        if(!empty($_POST)){
            $month = $_POST['month'];
            $data['result'] = $this->accounting->report_morbidity_log($month);
            $data['count'] = $this->accounting->count_morbidity_log($month);
        }
        $this->load->view('morbidity_log.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function adding_accounting(){
        $this->load->view('temp/head.php');
        // if($this->session->userdata('role') == 'Руководитель организации'){
        //     redirect('main/index.php');
        // }
        // else if($this->session->userdata('role') == 'Медицинская сестра'){
        //     $this->load->view('temp/nav_nurse.php');
        // }
        // else if($this->session->userdata('role') == 'Воспитатель'){
        //     redirect('main/index.php');
        // }
        // else {
        //     redirect('main/login.php');
        // }
        $this->load->view('temp/nav_nurse.php');
        $this->load->model('kids');
        $this->load->model('accounting');
        $this->load->model('morbidity');
        $data['kids'] = $this->kids->select_kids();
        $data['morbidity'] = $this->morbidity->select_morbidity();
        if(!empty($_POST)){
            $id_morbidity = $_POST['id_morbidity'];
            $id_kid = $_POST['id_kid'];
            $data_start = $_POST['data_start'];
            $data_end = $_POST['data_end'];
            $this->accounting->add_accounting($id_kid, $id_morbidity, $data_start, $data_end);
        }
        $this->load->view('adding_accounting.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function lists_children(){
        $this->load->view('temp/nav_nurse.php');
        $this->load->view('temp/head.php');
        // if($this->session->userdata('role') == 'Руководитель организации'){
        //     redirect('main/index.php');
        // }
        // else if($this->session->userdata('role') == 'Медицинская сестра'){
        //     $this->load->view('temp/nav_nurse.php');
        // }
        // else if($this->session->userdata('role') == 'Воспитатель'){
        //     redirect('main/index.php');
        // }
        // else {
        //     redirect('main/login.php');
        // }
        
        $this->load->model('accounting');
        $data['result'] = array();
        $this->load->model('groups');
        $data['groups'] = $this->groups->select_groups();
        if(!empty($_POST)){
            $id_group = $_POST['id_group'];
            $data['result'] = $this->accounting->lists_children($id_group);
        }
        $this->load->view('lists_children.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function morbidity_analysis(){
        $this->load->view('temp/nav_nurse.php');
        $this->load->view('temp/head.php');
        $this->load->model('accounting');
        $data['result'] = array();
        if(!empty($_POST)){
            $data_start = $_POST['data_start'];
            $data_end = $_POST['data_end'];
            $data['result'] = $this->accounting->morbidity_analysis($data_start, $data_end);
        }
        $this->load->view('morbidity_analysis.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function analysis_children(){
        $this->load->view('temp/nav_nurse.php');
        $this->load->view('temp/head.php');
        $this->load->model('accounting');
        $data['result'] = array();
        if(!empty($_POST)){
            $data_start = $_POST['data_start'];
            $data_end = $_POST['data_end'];
            $data['result'] = $this->accounting->analysis_children($data_start, $data_end);
        }
        $this->load->view('analysis_children.php', $data);
        $this->load->view('temp/footer.php');
    }
}
?>