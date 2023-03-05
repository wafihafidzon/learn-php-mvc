<?php
class Mahasiswa extends Controller{
    public function index() {
        // indeks dari title web
        $data['judul'] = "Mahasiswa";
        //pemanggilan model ke controller model untuk menuju func getAllMahasiswa() di mahasiswa_model.php
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
        
    }
}