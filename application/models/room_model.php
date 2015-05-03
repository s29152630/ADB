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
		
		$query2;
		if($query1->num_rows()){
			$notIn = array();
			foreach ($query1->result() as $row)
			{
				array_push($notIn, $row->roomID);
			}

			// SELECT * FROM room WHERE roomID NOT IN ();
			$this->db->select('*');
			$this->db->from('room');
			$this->db->where('roomCapacity', $queryBag['roomCapacity']);
			$this->db->where('roomPrice', $queryBag['roomPrice']);
			$this->db->where('roomStyle', $queryBag['roomStyle']); 
			$this->db->where_not_in('roomID', $notIn);
			$query2 = $this->db->get();

		}else{
			// SELECT * FROM room;
			$this->db->select('*');
			$this->db->from('room');
			$this->db->where('roomCapacity', $queryBag['roomCapacity']);
			$this->db->where('roomPrice', $queryBag['roomPrice']);
			$this->db->where('roomStyle',$queryBag['roomStyle']);
			$query2 = $this->db->get();
		}

		return $query2->result(); //generate table return query
	}

	public function getRoomRecord($sessionID)
	{
		// SELECT * FOMR record JOIN room ON record.roomID = room.roomID 
		// JOIN bookingdate ON record.recID = bookingdate.recID
		// WHERE record.memID = $sessionID
		$this->db->select('record.memID, record.roomID, record.recID, record.recDate, 
			record.checkinDate, record.checkoutDate, room.roomCapacity, roomPrice, roomStyle, 
			bookingdate.startDate');
		$this->db->from('record');
		$this->db->join('bookingdate', 'record.recID = bookingdate.recID');
		$this->db->join('room', 'record.roomID = room.roomID');
		$this->db->where('record.memID', $sessionID);
		$query = $this->db->get();
		return $query->result(); //generate table return query
	}

	public function getRoomRecordB($queryBag)
	{
		// SELECT * FOMR record JOIN room ON record.roomID = room.roomID 
		// JOIN bookingdate ON record.recID = bookingdate.recID
		// JOIN member ON record.memID = member.memID
		// WHERE room.roomCapacity = $queryBag['roomCapacity'] AND room.roomPrice = $queryBag['roomPrice'] 
		// AND room.roomStyle = $queryBag['roomStyle'] AND bookingdate.startDate >= $queryBag['date1']
		// AND bookingdate.startDate <= $queryBag['date2'];
		$this->db->select('member.memID, member.memName, record.roomID, record.recID, record.recDate, 
			record.checkinDate, record.checkoutDate, room.roomCapacity, room.roomPrice, room.roomStyle, 
			bookingdate.startDate');
		$this->db->from('record');
		$this->db->join('bookingdate', 'record.recID = bookingdate.recID');
		$this->db->join('room', 'record.roomID = room.roomID');
		$this->db->join('member', 'record.memID = member.memID');

		if($queryBag['roomCapacity'] != 0)
		{
			$this->db->where('room.roomCapacity', $queryBag['roomCapacity']);
		}

		if($queryBag['roomPrice'] != 0)
		{
			$this->db->where('room.roomPrice', $queryBag['roomPrice']);
		}

		if($queryBag['roomStyle'] != '0')
		{
			$this->db->where('room.roomStyle', $queryBag['roomStyle']); 
		}

		$this->db->where('bookingdate.startDate >=', $queryBag['date1']);
		$this->db->where('bookingdate.startDate <=', $queryBag['date2']);

		$query = $this->db->get();
		return $query->result(); //generate table return query
	}

	public function setRecord($id,$sessionID,$date)
	{
		//INSERT INTO "record" ("roomID", "memID","recDate","payDate","ckeckinDate","checkoutDate") 
		//VALUES ("$roomID", "$sessionID","$recDate","$payDate","$ckeckinDate","$checkouDate");			
		
		$recDate = date("Y-m-d H:i:s");

		$data = array(		
   			'roomID' => $id ,
 			'memID' => $sessionID,
 			'recDate' => $recDate,
 			'payDay' => "",
 			'checkinDate' => "",
 			'checkoutDate' => ""
		);

		$this->db->insert('record', $data); 

		//INSERT INTO "bookingdate" ("recID","roomID","startDate","endDate") VALUES ($recID, $id, $startDate, $endDate);
		$recID = $this->db->insert_id();


		$data = array(		
   			'recID' => $recID,
 			'roomID' => $id,
 			'startDate' => $date,
		);

		$this->db->insert('bookingdate', $data);

	}

}