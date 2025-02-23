<?php
class Data_Pengguna extends Controller {
public function index()
  {
  $data['judul'] = 'Data Pengguna';
  $data['user'] = $this->model('Pengguna_model')->getAllPengguna();
  $this->view('templates/header', $data);
  $this->view('data_pengguna/index', $data);
  $this->view('templates/footer');
  }
}