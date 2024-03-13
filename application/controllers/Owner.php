<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Owner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('peminjaman_model');
    }

    public function index()
    {
        $data['title'] = 'Peminjaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pinjam'] = $this->peminjaman_model->dataJoin()->result();
        $data['pinjam'] = $this->peminjaman_model->data()->result();
       
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('owner/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambahbarang()
    {
        $data['title'] = 'Peminjaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pinjam'] = $this->peminjaman_model->dataJoin()->result();
        $data['tglsekarang'] = Date('y-m-d');
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('owner/tambahbarang', $data);
        $this->load->view('templates/footer');
    
    }

    public function proses_tambah()
	{
		$idpinjam = $_POST['idpinjam']; 
		$tglpinjam = $_POST['tglpinjam']; 
		$tglkembali = $_POST['tglkembali'];
		$ket = $_POST['ket'];
		

		$data = array();
	

		$data2=array(
			'id'=>$idpinjam,
			'tgl_pinjam'=> $tglpinjam,
			'tempo'=>$tglkembali,
			'ket'=>$ket,
			'status'=>'Pinjam',
			'usr_input' => $idpinjam
		);

		$this->peminjaman_model->tambah_data($data2, 'peminjaman');
		

		$this->session->set_flashdata('Pesan','
		<script>
		$(document).ready(function() {
			swal.fire({
				title: "Berhasil ditambahkan!",
				icon: "success",
				confirmButtonColor: "#4e73df",
			});
		});
		</script>
		');
    	redirect('owner');

	}

    
	public function proses_hapus($id)
	{
		$this->db->delete('peminjaman',['id' => $id]); 
		
		$this->session->set_flashdata('Pesan','
		<script>
		$(document).ready(function() {
			swal.fire({
				title: "Berhasil dihapus!",
				icon: "success",
				confirmButtonColor: "#4e73df",
			});
		});
		</script>
		');
		redirect('owner');
	}
}