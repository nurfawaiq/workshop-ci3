<?php
class Satuan_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->select('*');
		$this->db->from('tb_satuan');
		if($id != null) {
			$this->db->where('id_satuan', $id);
		}
		$query = $this->db->get();

		return $query;
	}

	public function add($data)
	{
		$params = array(
			'nama_satuan' => $data['nama'],
			'keterangan' => $data['ket'],
		);
		$this->db->insert('tb_satuan', $params);
	}
	public function edit($data)
	{
		$params = array(
			'nama_satuan' => $data['nama'],
			'keterangan' => $data['ket'],
		);
		$this->db->where('id_satuan', $data['id']);
		$this->db->update('tb_satuan', $params);
	}

	public function del($id)
	{
		$this->db->where('id_satuan', $id);
		$this->db->delete('tb_satuan');
	}
	
}