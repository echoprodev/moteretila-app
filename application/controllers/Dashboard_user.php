<?php 

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('dashboard_admin_model');
    }

    public function index() {
        $data['title'] = "MOTERETILA | Dashboard User";
        $data['tindak_lanjut_Count'] = $this->dashboard_admin_model->getCountTindakLanjut();
        $data['unit_Count'] = $this->dashboard_admin_model->getCountUnit();
        $data['users_Count'] = $this->dashboadashboard_admin_modelrd_model->getCountUsers();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('dashboard/dashboard', $data);
        $this->load->view('template/footer', $data);
    }
    
}
?>