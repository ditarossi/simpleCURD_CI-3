<?php

class Mahasiswa_model extends CI_model{
    public function getAllMahasiswa(){
        return $this->db->get('mahasiswa')->result_array(); 
    }

    public function tambahDataMahasiswa(){
        $data = [
            "NIM" => $this->input->post("NIM", true),
            "Nama" => $this->input->post("Nama", true),
            "Email" => $this->input->post("Email", true),
            "Prodi" => $this->input->post("Prodi", true),
        ];

        $this->db->insert('mahasiswa', $data);
    }
    
    public function hapusDataMahasiswa($ID){
        $this->db->where('ID', $ID);
        $this->db->delete('mahasiswa');
    }
    
    public function detailDataMahasiswa($ID){
        //bisa juga diterapkan di function hapus
        return $this->db->get_where('mahasiswa', ['ID' => $ID])->row_array();
    }
    
    public function editDataMahasiswa(){
        $data = [
            "NIM" => $this->input->post("NIM", true),
            "Nama" => $this->input->post("Nama", true),
            "Email" => $this->input->post("Email", true),
            "Prodi" => $this->input->post("Prodi", true),
        ];

        $this->db->where('ID', $this->input->post('ID'));
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataMahasiswa(){
        $kunci = $this->input->post('kunci', true);
        $this->db->like('NIM', $kunci);
        $this->db->or_like('Nama', $kunci);
        $this->db->or_like('Email', $kunci);
        $this->db->or_like('Prodi', $kunci);
        return $this->db->get('mahasiswa')->result_array();
    }
}

?>