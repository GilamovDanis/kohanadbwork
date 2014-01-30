<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Discount extends Controller_Frontend {

	public function action_index()
	{
	/**
	* Вывод списка
	**/
	$discount=ORM::factory('Discount');
    
	$messages_count=$discount->count_all();
	$pagination = Pagination::factory(array('total_items' => $messages_count));
	$pagination->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action()));
	
	$messages = $discount->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();
	
	
    $this->template->content=View::factory('pages/discount/main')
		->bind('messages',$messages)
		->bind('pagination',$pagination);
	}
	
	public function action_add()
	{ 
	/**
	* Добавление
	*/
	$data = array();
	
	     if (HTTP_Request::POST==Request::current()->method()) {
		 $discount = ORM::factory('Discount');
		 
		 // Извлечение данных в массив ,фильтрация
		 $data = Arr::map('Security::xss_clean', Request::current()->post());
		
         try {
         $discount->create_discount($data, array('name','discount'));
		 
		 $this->redirect('discount');
		 
		 return TRUE;
		 
		 //Settings::set('message','Скидка была успешно добавлена в базу');
         } catch (ORM_Validation_Exception $e) {
		   Settings::set('error',$e->errors('validation'));
         }
		}

    $this->template->content=View::factory('pages/discount/add');
	}
	
	public function action_delete()
	{
	/**
	* Удаление
	**/
	$id = $this->request->param('id');
	$discount=ORM::factory('Discount',$id);
	
		if(!$discount->loaded()){
			throw HTTP_Exception::factory(404,'Данного сообщения нет');
		}

	$discount->delete();
	

	$this->redirect('discount');
	}

 

} // End Discount