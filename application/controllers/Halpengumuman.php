<?php

class Halpengumuman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengumuman_model');
        $this->load->library('form_validation');
    }
    public function index()
    {

        $data['judul'] = 'Daftar Pengumuman';

        $data['halpengumuman'] = $this->Pengumuman_model->getAllHalpengumuman();
        $this->load->view('templates/header', $data);
        $this->load->view('halpengumuman/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pengumuman';


        $this->form_validation->set_rules('pengumuman', 'Pengumuman', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('halpengumuman/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Pengumuman_model->tambahDataHalpengumuman();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('halpengumuman');
        }
    }
    public function hapus($id)
    {
        $this->Pengumuman_model->hapusDataHalpengumuman($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('halpengumuman');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data halpengumuman';
        $data['halpengumuman'] = $this->Pengumuman_model->getHalpengumumanById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('halpengumuman/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Pengumuman';
        $data['halpengumuman'] = $this->Pengumuman_model->getHalpengumumanById($id);

        $this->form_validation->set_rules('pengumuman', 'Pengumuman', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('halpengumuman/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pengumuman_model->ubahDataHalpengumuman();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('halpengumuman');
        }
    }
}
