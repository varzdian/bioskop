<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tayang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("tayang_model");
		$this->load->model("bioskop_model");
		$this->load->model("product_model");
    }

    public function index()
    {
        $data["products"] = $this->tayang_model->getAll();
        $this->load->view("admin/product/tayang_list", $data);
		
    }

	public function add(){
		$data["bioskops"] = $this->bioskop_model->getAll();
		$data["films"] = $this->product_model->getAll();
		$this->load->view("admin/product/tayang", $data);
	}

	public function save()
    {
		if($this->tayang_model->input_data()===TRUE)
		{
			$this->session->set_flashdata('success', 'Berhasil disimpan');	
        	redirect('admin/tayang');
		}
		else
		{	
			$this->session->set_flashdata('error', 'Gagal simpan data');
			$this->load->view("admin/product/tayang");
		}
	}
}    
