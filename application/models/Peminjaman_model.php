<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman_model extends CI_Model 
{
    public function dataJoin()
    { 
      $this->db->select('*');
      $this->db->from('peminjaman as p');
      $this->db->join('user as a', 'a.name = p.usr_input');
      $this->db->order_by('p.tgl_pinjam','DESC');
      return $query = $this->db->get();
    }
    public function tambah_data($data, $table)
    {
      $this->db->insert($table, $data);
    }
    public function data()
    {
      $this->db->order_by('id','DESC');
      return $query = $this->db->get('peminjaman');
    }
  
}
