<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Discount extends ORM {

	protected $_has_many = array(
            'client'    => array(
                    'model'         => 'Client',
					'foreign_key' => 'type_id',
                   )
            );


	public function rules()
	{
		return array(
			'name' => array(
				array('not_empty'),
			),
			'discount' => array(
				array('not_empty'),
			),
			);
	}


	public function create_discount($values,$expected)
	{
		return $this->values($values, $expected)->create();
	}
	
	public function edit_discount($values, $expected)
	{			
		return $this->values($values, $expected)->update();
	}
} // End Discount Model