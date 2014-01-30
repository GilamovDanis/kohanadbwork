<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Client extends ORM {


	protected $_has_many = array(
		'room'=> array(
						'model' => 'Room', 
						'through' => 'clients_rooms',
						),
	);
	
	protected $_belongs_to = array(
            'discount'    => array(
                    'model'         => 'Discount',
					'foreign_key' => 'type_id',
                   )
            );
	
	public function rules()
	{
		return array(
			'name' => array(
				array('not_empty'),
			),
			'surname' => array(
				array('not_empty'),
			),
			'patronymic' => array(
				array('not_empty'),
			),
			);
	}
	
	public function create_client($values, $expected)
	{			
		return $this->values($values, $expected)->create();
	}
	
	public function edit_client($values, $expected)
	{	
		return $this->values($values, $expected)->update();
	}
    
} // End Client Model