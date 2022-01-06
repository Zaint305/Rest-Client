<?php

class Alat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Alat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Sewa Alat';
        $data['Alat'] = $this->Alat_model->getAllAlat();
        $this->load->view('templates/header', $data);
        $this->load->view('Alat/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Alat';

        $this->form_validation->set_rules('Alat', 'Alat', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required|numeric');
        $this->form_validation->set_rules('waktu_sewa', 'waktu_sewa', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('Alat/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Alat_model->tambahDataAlat();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Alat');
        }
    }

    public function hapus($id)
    {
        $this->Alat_model->hapusDataAlat($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Alat');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Sewa Alat';
        $data['Alat'] = $this->Alat_model->getAlatById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('Alat/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Sewa';
        $data['Alat'] = $this->Alat_model->getAlatById($id);

        $this->form_validation->set_rules('Alat', 'Alat', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required|numeric');
        $this->form_validation->set_rules('waktu_sewa', 'waktu_sewa', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('Alat/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Alat_model->ubahDataAlat();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Alat');
        }
    }

}
