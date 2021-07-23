<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "tb_film";

    public $product_id;
    public $name;
    public $price;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'required|numeric'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'numeric']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function input_data()
    {
		if ((($this->input->post()))) {
			$a = $this->input->post('judul_film');

			if (str_word_count($a)==2) {
				$txt = explode(" ", $a);
				$t1 = str_split(str_replace(["a","i","u","e","o"], "",$txt[0]));
				$t2 = str_split(str_replace(["a","i","u","e","o"], "",$txt[1]));
		
				$temp_id = $t1[0].$t2[0];
			}elseif (str_word_count($a)==1){
				$txt = $a;
				$t1 = str_split(str_replace(["a","i","u","e","o"], "",$txt));
				if (count($t1)==1) {
					$vk = "x";
					$vokal = str_split($txt);
					foreach ($vokal as $key => $value) {
						if ($value=='a'|$value=='i'|$value=='u'|$value=='e'|$value=='o') {$vk=$value;break;}else{}
					}
					$temp_id = $t1[0].$vk;
				}else{
					$temp_id = $t1[0].$t1[1];
				}
				
		
			}elseif ((str_word_count($a)>2)) {
				$txt = explode(" ", $a);
				$t1 = str_split(str_replace(["a","i","u","e","o"], "",$txt[0]));
				$t2 = str_split(str_replace(["a","i","u","e","o"], "",$txt[count($txt)-1]));
		
				$temp_id = $t1[0].$t2[0];
			}

			$row =  $this->db->select('kd_film')
			->like('kd_film', $temp_id)
			->order_by('kd_film','DESC')
			->limit(1)
			->get($this->_table)
			->row_array();
			$last_id = isset($row["kd_film"])?$row["kd_film"]:"000";


			$akhir_id = intval(substr($last_id,2))+1;
			
			if (strlen($akhir_id)==1){
				$kd_film = strtoupper($temp_id."00".$akhir_id);
			}elseif (strlen($akhir_id)==2) {
				$kd_film = strtoupper($temp_id."0".$akhir_id);
			}elseif (strlen($akhir_id)==3) {
				$kd_film = strtoupper($temp_id."".$akhir_id);
			}
		
			$data = array(
				'kd_film' => $kd_film,
				'judul_film' => $this->input->post('judul_film'),
				'tgl_launc' => $this->input->post('tgl_tayang'),
				'synopys' => $this->input->post('sinopsis'),
			);

			$this->db->db_debug = false;
        	if($this->db->insert($this->_table,$data)){
				return true;
			}else{
				$dt = $this->db->error();
				return $dt;
			}
		}
        
    }
    
    
}
