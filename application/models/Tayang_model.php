<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tayang_model extends CI_Model
{
    private $_table = "tb_jadwal";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

	public function input_data()
    {	
		$jadwal = explode("T", $this->input->post('tgl_tayang'));
		$tgl_temp = explode("-", $jadwal[0]);
		$tgl = $tgl_temp[2].$tgl_temp[1].$tgl_temp[0];
	
		$jam_temp = explode(":", $jadwal[1]);
		$jam = $jam_temp[0].$jam_temp[1];

		$kd_tayang_temp = $this->input->post('bioskop').$tgl.$jam;

		$row =  $this->db->select('kd_tayang')
			->like('kd_tayang', $kd_tayang_temp)
			->order_by('kd_tayang','DESC')
			->limit(1)
			->get($this->_table)
			->row_array();
			$last_id = isset($row["kd_tayang"])?$row["kd_tayang"]:"0000";

			$akhir_id = intval(substr($last_id,14))+1;
			// echo $last_id;
			// echo "<br>";
			// echo $akhir_id;
			
			if (strlen($akhir_id)==1){
				$kd_tayang = strtoupper($kd_tayang_temp."000".$akhir_id);
			}elseif (strlen($akhir_id)==2) {
				$kd_tayang = strtoupper($kd_tayang_temp."00".$akhir_id);
			}elseif (strlen($akhir_id)==3) {
				$kd_tayang = strtoupper($kd_tayang_temp."0".$akhir_id);
			}elseif (strlen($akhir_id)==4) {
				$kd_tayang = strtoupper($kd_tayang_temp."".$akhir_id);
			}

		$data = array(
			'kd_tayang' => $kd_tayang,
			'judul_film' => $this->input->post('judul_film'),
			'tgl_waktu_tayang' => $this->input->post('tgl_tayang'),
			'jumlah_kursi' => $this->input->post('jml_kursi'),
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
