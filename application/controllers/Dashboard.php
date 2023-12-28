<?php 

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('dashboard_model');
    }

    public function index() {
        $data['title'] = "MOTERETILA | Dashboard";
        $data['tindak_lanjut_Count'] = $this->dashboard_model->getCountTindakLanjut();
        $data['unit_Count'] = $this->dashboard_model->getCountUnit();
        $data['users_Count'] = $this->dashboard_model->getCountUsers();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('dashboard/admin', $data);
        $this->load->view('template/footer', $data);
    }
    
}
?>
