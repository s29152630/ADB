<?php
class Room_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function getRoomStatus($queryBag)
	{
		// SELECT * FROM room JOIN bookingdate ON room.roomID = bookingdate.roomID
		// WHERE roomCapacity = $queryBag['roomCapacity'] AND roomPrice = $queryBag['roomPrice'] 
		// AND roomStyle = $queryBag['roomStyle'] AND bookingdate.startDate = $queryBag['date'];
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

		// SELECT * FROM room WHERE roomID NOT IN ();
		$this->db->select('*');
		$this->db->from('room');
		$this->db->where_not_in('roomID', $notIn);
		$query2 = $this->db->get();

		return $query2; //generate table return query
	}

	public function getRoomRecord($sessionID)
	{
		// SELECT * FOMR record JOIN room ON record.roomID = room.roomID 
		// JOIN bookingdate ON record.recID = bookingdate.recID
		// WHERE record.memID = $sessionID
		$this->db->select('record.memID, record.roomID, record.recID, record.recDate, 
			record.checkinDate, record.checkoutDate, room.roomCapacity, roomPrice, roomStyle, 
			bookingdate.startDate, bookingdate.endDate');
		$this->db->from('record');
		$this->db->join('bookingdate', 'record.recID = bookingdate.recID');
		$this->db->join('room', 'record.roomID = room.roomID');
		$this->db->where('record.memID', $sessionID);
		$query = $this->db->get();

		return $query; //generate table return query
	}
}