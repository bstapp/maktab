<?php
class Data_Pengguna extends Controller {
public function index()
  {
  $data['judul'] = 'Data Pengguna';
  $this->view('templates/header', $data);
  $this->view('data_pengguna/index');
  $this->view('templates/footer');
  }
}