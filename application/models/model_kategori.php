<?php
class Model_kategori extends CI_Model
{
  public function data_baju_dewasa()
  {
    return $this->db->get_where("tb_barang", array('kategori' => 'baju dewasa'));
  }
  public function data_baju_anak()
  {
    return $this->db->get_where("tb_barang", array('kategori' => 'baju anak'));
  }
}
