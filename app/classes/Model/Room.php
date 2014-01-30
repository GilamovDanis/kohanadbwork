<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Room extends ORM {


	protected $_has_many = array(
		'client'=> array(
						'model' => 'Room', 
						'through' => 'clients_rooms',
						),
	);
	
	public function rules()
	{
		return array(
			'type' => array(
				array('not_empty'),
			),
			'price' => array(
				array('not_empty'),
			),
			'status' => array(
				array('not_empty'),
			),
			'count' => array(
				array('not_empty'),
			),
			);
	}
	
	public function create_room($values, $expected)
	{			
		return $this->values($values, $expected)->create();
	}
	
	public function edit_room($values, $expected)
	{	
		return $this->values($values, $expected)->update();
	}
    
} // End Client Model