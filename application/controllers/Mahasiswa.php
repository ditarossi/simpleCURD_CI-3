<?php

class Mahasiswa extends CI_Controller{

    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Mahasiswa_model');
        //$this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title']='Halaman Mahasiswa';
        //calling database
        $data['mahasiswa']=$this->Mahasiswa_model->getAllMahasiswa();
        if($this->input->post('kunci')){
            $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title']='Form Tambah Data Mahasiswa';
        $data['Prodi'] = ['Teknik Informatika', 'Teknik Sipil', 'Teknik Industri'];

        $this->form_validation->set_rules('NIM', 'nim', 'required');
        $this->form_validation->set_rules('Nama', 'nama', 'required');
        $this->form_validation->set_rules('Email', 'email', 'required|valid_email');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else 
        {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('mahasiswa');
        }
    }

    public function hapus($ID)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($ID);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('mahasiswa');
        //$this->db->delete('mahasiswa', array('ID' => $ID));  
    }

    public function detail($ID)
    {
        $data['title']='Detail Data Mahasiswa';
        $data['mahasiswa']=$this->Mahasiswa_model->detailDataMahasiswa($ID);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');

    }

    public function edit($ID)
    {
        $data['title']='Form Edit Data Mahasiswa';
        $data['mahasiswa']=$this->Mahasiswa_model->detailDataMahasiswa($ID);
        $data['Prodi'] = ['Teknik Informatika', 'Teknik Sipil', 'Teknik Industri'];

        $this->form_validation->set_rules('NIM', 'nim', 'required');
        $this->form_validation->set_rules('Nama', 'nama', 'required');
        $this->form_validation->set_rules('Email', 'email', 'required|valid_email');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('templates/footer');
        } else 
        {
            $this->Mahasiswa_model->editDataMahasiswa();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('mahasiswa');
        }
    }
}

?>