<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bioskop extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("bioskop_model");
    }

    public function index()
    {
        $data["products"] = $this->bioskop_model->getAll();
        $this->load->view("admin/product/bioskop_list", $data);
    }
	public function add(){
		$this->load->view("admin/product/bioskop");
	}

	public function save()
    {
		if($this->bioskop_model->input_data()===TRUE)
		{
			$this->session->set_flashdata('success', 'Berhasil disimpan');			
			$data["products"] = $this->bioskop_model->getAll();
        	redirect('admin/bioskop');
				
		}
		else
		{	
			$this->session->set_flashdata('error', 'Gagal simpan data');
			$this->load->view("admin/product/bioskop");
		}
	}
}    
