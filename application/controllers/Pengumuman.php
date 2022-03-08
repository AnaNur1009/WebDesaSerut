<?php
class Pengumuman extends CI_Controller{
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('status')==0){
			redirect(base_url("akun/profil"));
		} elseif (!$this->session->userdata('nik')){
			$allowed = array("lihat","detail");
			$method = $this->router->fetch_method();
			if(!in_array($method, $allowed)){
				redirect(base_url("akun/masuk"));
			}
		}
		$this->load->model('m_crud');
	}

	function index(){
		$title['judul'] = 'Pengumuman/ Kegiatan';
		$data['info'] = $this->m_crud->data_pengumuman();
		$this->load->view('includes/v_header', $title);
		$this->load->view('pengumuman/info',$data);
		$this->load->view('includes/v_footer');
	}

function detail($id_pengumuman){
		$title['judul'] = 'Detail Pengumuman/ Kegiatan';
		$data['detail'] = $this->m_crud->detail_pengumuman($id_pengumuman);
		$this->load->view('includes/v_header', $title);
		$this->load->view('pengumuman/detail_info',$data);
		$this->load->view('includes/v_footer');
	}

}
