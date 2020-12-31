<?php

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_transaksi', 'tsk');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Transaksi';
        $data['Transaksi'] = $this->tsk->getAllTransaksi();
       
        $this->load->view('templates/header', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Transaksi';

        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('kendaraan', 'kendaraan', 'required');
        $this->form_validation->set_rules('tujuan', 'tujuan', 'required');
        $this->form_validation->set_rules('biaya', 'biaya', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('transaksi/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->tsk->tambahDataTransaksi();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('index.php/Transaksi');
        }
    }

    public function hapus($id)
    {
        $this->tsk->hapusDataTransaksi($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('index.php/Transaksi');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Transaksi';
        $data['Transaksi'] = $this->tsk->getTransaksiById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('transaksi/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data ';
        $data['Transaksi'] = $this->tsk->getTransaksiById($id);
       
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('kendaraan', 'kendaraan', 'required');
        $this->form_validation->set_rules('tujuan', 'tujuan', 'required');
        $this->form_validation->set_rules('biaya', 'biaya', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('transaksi/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->tsk->ubahDataTransaksi();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('index.php/Transaksi');
        }
    }

}
