<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_survei extends CI_Model {
	public function GetResult(){
		$tgl = date("Y-m-d");
		$sangat_puas = $this->db->query("SELECT count(*) as data FROM data WHERE respon = '1' AND tanggal = '$tgl'")->row_array();
		$puas = $this->db->query("SELECT count(*) as data FROM data WHERE respon = '2' AND tanggal = '$tgl'")->row_array();
		$tidak_puas = $this->db->query("SELECT count(*) as data FROM data WHERE respon = '3' AND tanggal = '$tgl'")->row_array();
		$sangat_tidak_puas = $this->db->query("SELECT count(*) as data FROM data WHERE respon = '4' AND tanggal = '$tgl'")->row_array();
		$res = array(
			"sangat_puas" => $sangat_puas['data'],
			"puas" => $puas['data'],
			"tidak_puas" => $tidak_puas['data'],
			"sangat_tidak_puas" => $sangat_tidak_puas['data']
		);
		return $res;
	}
	public function InsertData($tabel, $data){
		$res = $this->db->insert($tabel, $data);
		return $res;
	}

	public function tabelRekap(){
		$sql = "SELECT
				SUM(IF(respon = 1, 1, 0)) as `sangat_puas`,
				SUM(IF(respon = 2, 1, 0)) as `puas`,
				SUM(IF(respon = 3, 1, 0)) as `tidak_puas`,
				SUM(IF(respon = 4, 1, 0)) as `sangat_tidak_puas`,
				DAY(tanggal) as `tanggal`,
				MONTH(tanggal) as `bulan`,
				YEAR(tanggal) as `tahun`
				FROM data
				GROUP BY tanggal";
				
		return $this->db->query($sql);
	}

}
