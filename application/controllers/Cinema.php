<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinema extends CI_Controller {

	
	public function index()
	{
		"Pemesanan Tiket Cinema 99";
		$this->load->view('view-input-cinema');
		
	}


	public function proses_penambahan()
	{


		if($this->input->post('tipe_studio')=="Reguler 2D")
		{
			$harga_tiket=40000;
		}
		elseif($this->input->post('tipe_studio')=="3D")
		{
			$harga_tiket=80000;
		}
		elseif($this->input->post('tipe_studio')=="Velvet")
		{
			$harga_tiket=100000;
		}

		$total=$this->input->post('jumlah_pesanan')*$harga_tiket;



		$data['judul']="Pemesanan Tiket Cinema 99";
		$data['nama_pemesan']=$this->input->post('nama_pemesan');
		$data['judul_film']=$this->input->post('judul_film');
		$data['pukul']=$this->input->post('pukul');
		$data['tipe_studio']=$this->input->post('tipe_studio');
		$data['jumlah_pesanan']=$this->input->post('jumlah_pesanan');
		$data['harga_tiket']=$harga_tiket;
		$data['total']=$total;

		$this->load->view('view-output-cinema',$data);
		
	}
}
 