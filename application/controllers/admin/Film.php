<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class film extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
    }

    public function index()
    {
        $data["products"] = $this->product_model->getAll();
        $this->load->view("admin/product/list", $data);
       // $this->load->view("tes");
    }

    public function save()
    {
        
		if($this->product_model->input_data()===TRUE)
		{
			$this->session->set_flashdata('success', 'Berhasil disimpan');			
			$data["products"] = $this->product_model->getAll();
        	redirect('admin/film');
				
		}
		else
		{	
			$this->session->set_flashdata('error', 'Gagal simpan data');
			$this->load->view("admin/product/new_form");
		}
	
		
	}

    public function add()
    {
        $this->load->view("admin/product/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("admin/product/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/products'));
        }
    }
}
