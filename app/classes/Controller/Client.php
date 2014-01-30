<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Client extends Controller_Frontend {

	public function action_index()
	{
	/**
	* Вывод списка
	**/
	$client=ORM::factory('Client');
    
	$messages_count=$client->count_all();
	$pagination = Pagination::factory(array('total_items' => $messages_count));
	$pagination->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action()));
	
	$messages = $client->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();
	
	
    $this->template->content=View::factory('pages/client/main')
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
		 $client = ORM::factory('Client');
		 
		 // Извлечение данных в массив ,фильтрация
		 $data = Arr::map('Security::xss_clean', Request::current()->post());
		
         try {
         $client->create_client($data, array('surname','name','patronymic','type_id', 'description'));
		 
		 $this->redirect('client');
		 
		 return TRUE;
		 
		 //Settings::set('message','Клиент был успешно добавлен в базу');
         } catch (ORM_Validation_Exception $e) {
		   Settings::set('error',$e->errors('validation'));
         }
		}

    $this->template->content=View::factory('pages/client/add');
	}
	
	public function action_edit()
	{   
	/**
	* Редактирование
	*/
	$id = $this->request->param('id');
	$client=ORM::factory('Client',$id);
	
		if(!$client->loaded()){
			throw HTTP_Exception::factory(404,'Данного клиента нет');
		}
	
	
		if (HTTP_Request::POST==Request::current()->method()) {
			 $data = Arr::map('Security::xss_clean', Request::current()->post());
			 
			 
			 try {
			 $client->edit_client($data, 
			  array('name','surname','patronymic','type_id','description'));
			
			
			  $this->redirect('client');
			 /*
				 if (!Settings::get('error')) {
				 Settings::set('message','Данные отредактированы');
				 }
			 */
			 } catch (ORM_Validation_Exception $e) {
			   Settings::set('error',$e->errors('validation'));
			 }
		}
	
	// Обновление модели
	$client=ORM::factory('Client',$client->id);
	
	$this->template->content = View::factory('pages/client/edit');
	Settings::set('client',$client);
	}
	
	public function action_search()
	{ 
	$data = array();
	$error = array();
	
	$session = Session::instance();
	$_SESSION =& $session->as_array();

	if(Request::current()->query('newsearch')) {
		unset($_SESSION['data']);
	}
	
	    if (HTTP_Request::POST==Request::current()->method() || isset($_SESSION['data'])) {
		$client = ORM::factory('Client');
		 
		if (HTTP_Request::POST==Request::current()->method()) {
		// Извлечение данных в массив ,фильтрация
		$data = Arr::map('Security::xss_clean', Request::current()->post());
		} elseif (isset($_SESSION['data'])) {
		$data=$_SESSION['data'];
		}
		
		// Save Pagination
		$_SESSION['data']=$data;
		
		// Поисковый запрос
		$query = DB::select('*')->from('clients')->or_where_open();
		
			if (!empty($data['name'])) {
			$query->where('name','LIKE',$data['name'].'%');
			} else {
			$query->where('name','LIKE',$data['name']);
			}
			
			if ($data['type_id']) {
				$query->or_where('type_id','=',$data['type_id']);
			}
			
			if (!empty($data['surname'])) {
			$query->or_where('surname','LIKE',$data['surname'].'%');
			}
			
			if (!empty($data['patronymic'])) {
			$query->or_where('patronymic','LIKE',$data['patronymic'].'%');
			}
			
			if (!empty($data['description'])) {
			$query->or_where('description','LIKE',$data['description'].'%');
			}
			
				try {
				$query->or_where_close();
				
				$messages_count=$query->execute()->count();
				$pagination = Pagination::factory(array('total_items' => $messages_count));
				$pagination->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action(),'id' => $this->request->param('id')));
		
				$messages = $query->limit($pagination->items_per_page)->offset($pagination->offset)->as_object()->execute();
				
				
				$this->template->content=View::factory('pages/client/searchlist')
				->bind('messages',$messages)
				->bind('pagination',$pagination);
				
				return TRUE;
				}  catch (ORM_Validation_Exception $e) {
				Settings::set('error',$e->errors('validation'));
				}
		}
		
    $this->template->content=View::factory('pages/client/search');
	}

 
	public function action_delete()
	{
	/**
	* Удаление
	**/
	$id = $this->request->param('id');
	$client=ORM::factory('Client',$id);
	
		if(!$client->loaded()){
			throw HTTP_Exception::factory(404,'Данного клиента нет');
		}

	$client->remove('room');
	$client->delete();
	

	$this->redirect('client');
	}

} // End Client