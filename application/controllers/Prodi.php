<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Prodi";
        $data['prodi'] = $this->Prodi_model->get();
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_prodi", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Prodi"; 
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_tambah_prodi", $data);
        $this->load->view("layout/footer");
    }
    public function upload()
    {
        $data = [
            'nama' => $this->input->POST('nama'),
            'ruangan' => $this->input->POST('ruangan'),
            'jurusan' => $this->input->POST('jurusan'),
            'akreditasi' => $this->input->POST('akreditasi'),
            'nama_kaprodi' => $this->input->POST('nama_kaprodi'),
            'tahun_berdiri' => $this->input->POST('tahun_berdiri'),
            'output_lulusan' => $this->input->POST('output_lulusan'),
            
            
        ];
        $this->Prodi_model->insert($data);
        redirect('Prodi');
    }
    public function hapus($id)
    {
        $this->Prodi_model->delete($id);
        redirect('Prodi');
    }
     public function edit($id)
    {
        $data['judul'] = "Halaman Update Prodi";
        $data['prodi'] = $this->Prodi_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_ubah_prodi", $data);
        $this->load->view("layout/footer");
    }
    public function update()
    {
        $data = [
            'nama' => $this->input->POST('nama'),
            'ruangan' => $this->input->POST('ruangan'),
            'jurusan' => $this->input->POST('jurusan'),
            'akreditasi' => $this->input->POST('akreditasi'),
            'nama_kaprodi' => $this->input->POST('nama_kaprodi'),
            'tahun_berdiri' => $this->input->POST('tahun_berdiri'),
            'output_lulusan' => $this->input->POST('output_lulusan'),
        ];
        $id = $this->input->post('id');
        $this->Prodi_model->update(['id' => $id], $data); 
        redirect('Prodi');
    }
}