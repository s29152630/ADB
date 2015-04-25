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
		//SELECT * FROM `room` join `bookingdate` on room.roomID = bookingdate.roomID WHERE room.roomCapacity = 2 
		//AND room.roomPrice = 2000 AND room.roomStyle = "紅海風格" AND bookingdate.startDate != '2015-4-26';
		$this->db->select('bookingdate.roomID');
		$this->db->from('room');
		$this->db->join('bookingdate', 'room.roomID = bookingdate.roomID');
		$this->db->where('room.roomCapacity', $queryBag['roomCapacity']);
		$this->db->where('room.roomPrice', $queryBag['roomPrice']);
		$this->db->where('room.roomStyle', $queryBag['roomStyle']); 
		$this->db->where('bookingdate.startDate', $queryBag['date']);
		$query1 = $this->db->get();
		
		$notIn = array();
		foreach ($query1->result() as $row)
		{
			array_push($notIn, $row->roomID);
		}

		$this->db->select('*');
		$this->db->from('room');
		$this->db->where_not_in('roomID', $notIn);
		$query2 = $this->db->get();

		return $query2; //generate table return query
	}
}