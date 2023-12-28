<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->input->post('login')) {
            $this->process_login();
        } else {
            $data['title'] = "MOTERETILA | Silahkan Login";
            $this->load->view('login/login', $data);
        }
    }

    public function process_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek_user = $this->login_model->cek_user($username);

        if ($cek_user) {
            $cek_login = $this->login_model->cek_login($username, $password);

            if ($cek_login) {
                foreach ($cek_login as $row) {
                    if (password_verify($password, $row->password)) {
                        $users = array(
                            'id_users' => $row->id_users,
                            'nama_lengkap' => $row->nama_lengkap,
                            'username' => $row->username,
                            'level' => $row->level
                        );
                        $this->session->set_userdata($users);

                        if ($this->session->userdata('level') == "Admin") {
                            $data['sidebar'] = $this->load->view('sidebar_admin', '', true);
                            $data['title'] = 'Dashboard Admin';

                            // Set pesan sukses
                            $this->session->set_flashdata('success_message', 'Selamat datang di moteretila, Anda berhasil login sebagai Admin.');

                            redirect(site_url('dashboard/admin'), 'refresh');
                        } elseif ($this->session->userdata('level') == "User") {
                            $data['sidebar'] = $this->load->view('sidebar_user', '', true);
                            $data['title'] = 'Dashboard User';

                            // Set pesan sukses
                            $this->session->set_flashdata('success_message', 'Selamat datang di moteretila, Anda berhasil login sebagai User.');

                            $this->load->view('dashboard', $data);
                            redirect(site_url('dashboard/user'), 'refresh');
                        } else {
                            echo '<script>alert("Anda tidak memiliki akses.");</script>';
                            redirect(site_url('login'), 'refresh');
                        }
                    } else {
                        echo '<script>alert("Username atau password salah.");</script>';
                        redirect(site_url('login'), 'refresh');
                    }
                }
            } else {
                $this->session->set_flashdata('success_message', 'Selamat Datang Di Moteretila');
                redirect(site_url('dashboard'), 'refresh');
            }
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();

        // Set pesan pop-up
        $this->session->set_flashdata('logout_message', 'Anda telah logout. Terima kasih atas kunjungan Anda.');

        redirect(site_url('login'));
    }
}
