<?php
class Room_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function getRoomStatus($queryBag)
	{
		// SELECT * FROM room WHERE roomCapacity = $queryBag['roomCapacity']
		// AND roomPrice = $queryBag['roomPrice'] AND roomStyle = $queryBag['roomStyle'];
		$array = array('roomCapacity' => $queryBag['roomCapacity'], 
					   'roomPrice' => $queryBag['roomPrice'], 
					   'roomStyle' => $queryBag['roomStyle']
					   );

		$query = $this->db->get('room');
		$this->db->where($array);
		// return $query->result();
		return $query;
	}
}