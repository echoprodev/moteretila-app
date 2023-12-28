<?php

class Tindak_lanjut_model extends CI_Model
{

    public function get_tindak_lanjut()
    {
        return $this->db->get('tb_tindak_lanjut')->result();
    }

    public function get_tindak_lanjut_byid($id)
    {
        return $this->db->get_where('tb_tindak_lanjut', ['id_tindak_lanjut' => $id])->row();
    }

    public function tambah_tindak_lanjut()
    {
        //membaca validasi form input
        $this->form_validation->set_rules('tindak_lanjut', 'Tindak Lanjut', 'required', [
            'required' => '%s Harus Diisi'
        ]);
        $this->form_validation->set_rules('nama_unit', 'Unit', 'required', [
            'required' => '%s Harus Diisi'
        ]);
        $this->form_validation->set_rules('nama_pic', 'PIC', 'required', [
            'required' => '%s Harus Diisi'
        ]);
        $this->form_validation->set_rules('auditor', 'Auditor', 'required', [
            'required' => '%s Harus Diisi'
        ]);
        $this->form_validation->set_rules('ketua_tim', 'Ketua Tim', 'required', [
            'required' => '%s Harus Diisi'
        ]);
        $this->form_validation->set_rules('due_date', 'Due Date', 'required', [
            'required' => '%s Harus Diisi'
        ]);
        
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'nama_unit' => $this->unit_model->all_data(),
                'nama_pic' => $this->pic_model->all_data(),
                'nama_auditor' => $this->auditor_model->all_data(),
                'nama_ketua_tim' => $this->ketua_tim_model->all_data(),
            );

        }else {

        //jika lolos validasi

        $data = array(
            'tindak_lanjut' => $this->input->post('tindak_lanjut'),
            'nama_unit' => $this->input->post('nama_unit'),
            'nama_pic' => $this->input->post('nama_pic'),
            'nama_auditor' => $this->input->post('auditor'),
            'nama_ketua_tim' => $this->input->post('ketua_tim'),
            'due_date' => $this->input->post('due_date')
        );
        $this->db->insert('tb_tindak_lanjut', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data tindak lanjut berhasil ditambahkan');
        } else {
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data tindak lanjut gagal ditambahkan');
        }
        redirect('tindak_lanjut');
        }
    }

    public function hapus_tindak_lanjut($id)
    {
        $this->db->delete('tb_tindak_lanjut', ['id_tindak_lanjut' => $id]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data tindak lanjut berhasil dihapus');
        } else {
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data tindak lanjut gagal dihapus');
        }
    }

    public function ubah_tindak_lanjut($id)
    {
        $data = [
            'tindak_lanjut' => $this->input->post('tindak_lanjut'),
            'nama_unit' => $this->input->post('nama_unit'),
            'nama_pic' => $this->input->post('nama_pic'),
            'nama_auditor' => $this->input->post('nama_auditor'),
            'nama_ketua_tim' => $this->input->post('nama_ketua_tim')
        ];
        $this->db->update('tb_tindak_lanjut', $data, ['id_tindak_lanjut' => $id]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data tindak lanjut berhasil diubah');
        } else {
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data tindak lanjut gagal diubah');
        }
    }

    public function get_due_date($id_tindak_lanjut)
    {
        $task = $this->get_tindak_lanjut_byid($id_tindak_lanjut);
        return $task->due_date;
    }

    public function save_due_date($id_tindak_lanjut, $due_date)
    {
        $this->db->where('id_tindak_lanjut', $id_tindak_lanjut);
        $this->db->update('tb_tindak_lanjut', ['due_date' => $due_date]);
    }

    public function get_remaining_time($id_tindak_lanjut)
    {
        $due_date = $this->get_due_date($id_tindak_lanjut);

        if (!$due_date) {
            return null;
        }

        $current_time = time();
        $due_time = strtotime($due_date);
        $remaining_time = $due_time - $current_time;

        return $remaining_time;
    }

    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('tb_tindak_lanjut');
        $this->db->join('tb_unit', 'tb_unit.id_unit = tb_tindak_lanjut.id_unit', 'left');
        $this->db->join('tb_pic', 'tb_pic.id_pic = tb_tindak_lanjut.id_pic', 'left');
        $this->db->join('tb_auditor', 'tb_auditor.id_auditor = tb_tindak_lanjut.id_auditor', 'left');
        $this->db->join('tb_ketua_tim', 'tb_ketua_tim.id_ketua_tim = tb_tindak_lanjut.id_ketua_tim', 'left');

        return $this->db->get()->result();
    }

	function getUnit() {
		$this->db->select('*');
		$this->db->from('tb_unit');
		$this->db->order_by('id', 'DESC');
		return $this->db->get()->result();
	}

	function getData_unit() {
		$data = array(
			'tests' => $this->mymodel->getUnit()
		);
		$this->load->view('tindak lanjut/tambah', $data);
	}
}
