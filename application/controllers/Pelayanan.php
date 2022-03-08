<?php
class Pelayanan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_crud');
	}
function index(){
		$title['judul'] = 'Pelayanan Desa';
		$this->load->view('includes/v_header', $title);
		$this->load->view('pelayanan/info_pelayanan');
		$this->load->view('includes/v_footer');
	}

	function data(){
		$title['judul'] = 'Data Penerima Bansos';
		$title['active'] = 'penerima';

		$data['penerima'] = $this->m_crud->datapenerima();
		$data['judul'] = 'Info Pelayanan';
		$this->load->view('includes/v_header', $title);
		$this->load->view('pelayanan/data_penerima',$data);
		$this->load->view('includes/v_footer');
	}

function info(){
		$title['judul'] = 'Info Pelayanan';
		$title['active'] = 'jenis';

		$data['jenis'] = $this->m_crud->readBy('tbl_jenisbansos', array('jenis <>'=>-1));
		$data['judul'] = 'Info Pelayanan';	
		$this->load->view('includes/v_header', $title);
		$this->load->view('pelayanan/informasi_pelayanan',$data);
		$this->load->view('includes/v_footer');
	}

	function syarat($id_bansos){
		$title['judul'] = 'Persyaratan';
		$title['active'] = 'syarat';

		$data['syarat'] = $this->m_crud->detail_syarat($id_bansos);
		$data['judul'] = 'Persyaratan';	
		$this->load->view('includes/v_header', $title);
		$this->load->view('pelayanan/persyaratan',$data);
		$this->load->view('includes/v_footer');
	}
	
 
 function detail_penerima($id_data){
		$title['judul'] = 'Detail Penerima';
		$title['active'] = 'detail';

		$data['detail'] = $this->m_crud->detail_bansos($id_data);
		$data['judul'] = 'Detail Penerima';	
		$this->load->view('includes/v_header', $title);
		$this->load->view('pelayanan/detail_penerima',$data);
		$this->load->view('includes/v_footer');
	}


	function kategori(){
		$title['judul'] = 'Kategori Bansos';
		$title['active'] = 'detail';

		$data['judul'] = 'Kategori Bansos';	
		$this->load->view('includes/v_header', $title);
		$this->load->view('pelayanan/kategori');
		$this->load->view('includes/v_footer');
	}

	public function tidak_mampu()
{
		$title['judul'] = 'Kategori Tidak Mampu';
		$title['active'] = 'tidakmampu';

		$data['tidakmampu'] = $this->m_crud->data_tidakmampu()->result();
		$this->load->view('includes/v_header', $title);
		$this->load->view('pelayanan/tidak_mampu',$data);
		$this->load->view('includes/v_footer');
}

public function blt()
{
		$title['judul'] = 'Kategori BLT';
		$title['active'] = 'blt';

		$data['blt'] = $this->m_crud->data_blt()->result();
		$this->load->view('includes/v_header', $title);
		$this->load->view('pelayanan/blt',$data);
		$this->load->view('includes/v_footer');
}

public function umkm()
{
		$title['judul'] = 'Kategori UMKM';
		$title['active'] = 'umkm';

		$data['umkm'] = $this->m_crud->data_umkm()->result();
		$this->load->view('includes/v_header', $title);
		$this->load->view('pelayanan/umkm',$data);
		$this->load->view('includes/v_footer');
}

public function bnpt()
{
		$title['judul'] = 'Kategori BNPT';
		$title['active'] = 'bnpt';

		$data['bnpt'] = $this->m_crud->data_bnpt()->result();
		$this->load->view('includes/v_header', $title);
		$this->load->view('pelayanan/bnpt',$data);
		$this->load->view('includes/v_footer');
}

		
}