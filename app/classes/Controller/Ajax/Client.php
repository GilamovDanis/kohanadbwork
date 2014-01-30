<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_Client extends Controller {
	
		
		public function action_getclientname() 
		{
		/**
		* Получение AJAX запроса
		*/
		$name=Security::xss_clean(Request::current()->post('name'));
		
		$query=DB::select('name','surname')->from('clients')->where('name','LIKE', $name . '%');
		$names=$query->execute()->as_array();
		
		$json_arr=array();
		
		foreach ($names as $new) {
		$json_arr[]=$new['surname'].' '.$new['name'];
		}
		
		echo json_encode($json_arr);
		}
			

} // End Ajax