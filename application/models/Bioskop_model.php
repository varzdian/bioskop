<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bioskop_model extends CI_Model
{
    private $_table = "tb_bioskop";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

	public function input_data()
    {
		$huruf = str_split(str_shuffle("AAABBBCCCDDDEEEFFFGGGHHHIIIJJJKKKLLLMMMNNNOOOPPPQQQRRRSSSTTTUUUVVVWWWXXXYYYZZZ"));
			$kd_bioskop = $huruf[0].$huruf[1].$huruf[2];
			$row =  $this->db->select('kd_bioskop')
			->where('kd_bioskop',$kd_bioskop)
			->get($this->_table)
			->row_array();
		if($row !== null){
			while ($row == null) {
				$huruf = str_split(str_shuffle("AAABBBCCCDDDEEEFFFGGGHHHIIIJJJKKKLLLMMMNNNOOOPPPQQQRRRSSSTTTUUUVVVWWWXXXYYYZZZ"));
				$kd_bioskop = $huruf[0].$huruf[1].$huruf[2];
				$row =  $this->db->select('kd_bioskop')
				->where('kd_bioskop',$kd_bioskop)
				->get($this->_table)
				->row_array();
			}
		}		
		$data = array(
			'kd_bioskop' => $kd_bioskop,
			'nama_bioskop' => $this->input->post('nama_bioskop'),
			'alamat_bioskop' => $this->input->post('alamat_bioskop'),
			'kota' => $this->input->post('kota'),
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
