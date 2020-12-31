<?php

class Pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_pelanggan', 'plg');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Pelanggan';
        $data['Pelanggan'] = $this->plg->getAllPelanggan();
       
        $this->load->view('templates/header', $data);
        $this->load->view('pelanggan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pelanggan';

        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('tujuan', 'tujuan', 'required');
        $this->form_validation->set_rules('asal', 'asal', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pelanggan/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->plg->tambahDataPelanggan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('index.php/Pelanggan');
        }
    }

    public function hapus($id)
    {
        $this->plg->hapusDataPelanggan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('index.php/Pelanggan');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Pelanggan';
        $data['Pelanggan'] = $this->plg->getPelangganById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('pelanggan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data ';
        $data['Pelanggan'] = $this->plg->getPelangganById($id);
       
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('tujuan', 'tujuan', 'required');
        $this->form_validation->set_rules('asal', 'asal', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pelanggan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->plg->ubahDataPelanggan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('index.php/Pelanggan');
        }
    }

}
