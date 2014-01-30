<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Frontend {
	

	public function action_index()
	{
		$this->template->content = View::factory('pages/main');
	}

} // End Main