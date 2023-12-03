<?php

class Kategori extends CI_Controller
{
  public function baju_dewasa()
  {
    $data['baju_dewasa'] = $this->model_kategori->data_baju_dewasa()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('baju_dewasa',$data);
    $this->load->view('templates/footer');
  }
  public function baju_anak()
  {
    $data['baju_anak'] = $this->model_kategori->data_baju_anak()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('baju_anak',$data);
    $this->load->view('templates/footer');
  }
}
