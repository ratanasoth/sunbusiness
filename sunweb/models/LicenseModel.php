<?php 
class LicenseModel extends CI_Model
{
	// get all license log
	public function getLogo()
	{
		$this->db->order_by('orderno','asc');
		return $this->db->get('licenselogo')->result();
	}
	// delete a logo
	public function delete($id)
	{
		$this->db->delete('licenselogo',array('id'=>$id));
	}
	// add new logo to database
	public function insert($fname)
	{
		$data = array(
			'img'=>$fname,
			'orderno'=> $this->input->post('order')
		);
		$this->db->insert('licenselogo',$data);
	}
}

?>