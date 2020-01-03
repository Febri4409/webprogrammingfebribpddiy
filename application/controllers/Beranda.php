<?php

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Beranda_model');
        $this->load->library('form_validation');
    }
    public function index()
    {

        $data['judul'] = 'Daftar Beranda';

        $data['beranda'] = $this->Beranda_model->getAllBeranda();
        $this->load->view('templates/header', $data);
        $this->load->view('beranda/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Beranda';

        $this->form_validation->set_rules('berita', 'Berita', 'required');
        // $this->form_validation->set_rules('pengumuman', 'Pengumuman', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('beranda/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Beranda_model->tambahDataBeranda();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('beranda');
        }
    }
    public function hapus($id)
    {
        $this->Beranda_model->hapusDataBeranda($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('beranda');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Beranda';
        $data['beranda'] = $this->Beranda_model->getBerandaById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('beranda/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Beranda';
        $data['beranda'] = $this->Beranda_model->getBerandaById($id);

        $this->form_validation->set_rules('berita', 'Berita', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('beranda/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Beranda_model->ubahDataBeranda();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('beranda');
        }
    }
}
