<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('biodata_model');
    $this->load->helper('url_helper');
    $this->load->library('form_validation');
  }

	public function index()
	{
		$this->load->view('data/form');
	}

	public function tampil()
	{
	$data['bio']= $this->biodata_model->get_bio();
	$this->load->view('data/tampil', $data);
	}

  public function masuk()
  {
		$this->load->helper('form');
		

		$this->form_validation->set_rules('nomor','No Pelajar','required');
		$this->form_validation->set_rules('nama','Nama Pelajar','required');
		$this->form_validation->set_rules('jk','Jenis Kelamin','required');
		$this->form_validation->set_rules('tempat','Tempat Lahir','required');
		$this->form_validation->set_rules('tanggal','Tanggal Lahir','required');
		$this->form_validation->set_rules('alamat','Alamat','required');

		if ($this->form_validation->run() === FALSE) {
		$this->load->view('data/form');
		     
	  }else{
	  $this->biodata_model->buat();
		redirect('biodata/tampil');
		}

  }

  public function edit($id)
  {

    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nomor','No Pelajar','required');
		$this->form_validation->set_rules('nama','Nama Pelajar','required');
		$this->form_validation->set_rules('jk','Jenis Kelamin','required');
		$this->form_validation->set_rules('tempat','Tempat Lahir','required');
		$this->form_validation->set_rules('tanggal','Tanggal Lahir','required');
		$this->form_validation->set_rules('alamat','Alamat','required');

    if ($this->form_validation->run() === FALSE) {
      $data['bio_item']= $this->biodata_model->get_bio_id($id);
      $this->load->view('data/ubah', $data);
      // code...
    }else{
        $this->biodata_model->update_bio($id);
      $data['bio_item']= $this->biodata_model->get_bio($id);
    redirect('biodata/tampil' );
    }
  }

}
