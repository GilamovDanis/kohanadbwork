<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Room extends Controller_Frontend {

	public function action_index()
	{
	/**
	* Вывод списка
	**/
	$room=ORM::factory('Room');
    
	$messages_count=$room->count_all();
	$pagination = Pagination::factory(array('total_items' => $messages_count));
	$pagination->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action()));
	
	$messages = $room->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();
	
	
    $this->template->content=View::factory('pages/room/main')
		->bind('messages',$messages)
		->bind('pagination',$pagination);
	}
	
	public function action_registration()
	{ 
	/**
	* Регистрация клиента
	*/
	$data = array();
	$error = array();
	
	$id = $this->request->param('id');
	$room=ORM::factory('Room',$id);
	
		if(!$room->loaded()){
			// Если нет id комнаты отслылаем обратно
			HTTP::redirect('room/search/newsearch=1');
		} 
		
		if (HTTP_Request::POST==Request::current()->method()) {
			 $data = Arr::map('Security::xss_clean', Request::current()->post());
			 
			 
			 try {
			 $room->edit_room($data, 
			  array('type','price','status','count'));
			
			
			  $this->redirect('room');
			 /*
				 if (!Settings::get('error')) {
				 Settings::set('message','Данные отредактированы');
				 }
			 */
			 } catch (ORM_Validation_Exception $e) {
			   Settings::set('error',$e->errors('validation'));
			 }
		}
		
		
    $this->template->content=View::factory('pages/room/registration');
	Settings::set('room',$room);
	}
	

	public function action_add()
	{ 
	/**
	* Добавление
	*/
	$data = array();
	
	     if (HTTP_Request::POST==Request::current()->method()) {
		 $room = ORM::factory('Room');
		 
		 // Извлечение данных в массив ,фильтрация
		 $data = Arr::map('Security::xss_clean', Request::current()->post());
		
         try {
         $room->create_room($data,  array('type','price','status','count'));
		 
		 $this->redirect('room');
		 
		 return TRUE;
		 
		 //Settings::set('message','Клиент был успешно добавлен в базу');
         } catch (ORM_Validation_Exception $e) {
		   Settings::set('error',$e->errors('validation'));
         }
		}

    $this->template->content=View::factory('pages/room/add');
	}
	
	public function action_edit()
	{   
	/**
	* Редактирование
	*/
	$id = $this->request->param('id');
	$room=ORM::factory('Room',$id);
	
		if(!$room->loaded()){
			throw HTTP_Exception::factory(404,'Данного клиента нет');
		}
	
	
		if (HTTP_Request::POST==Request::current()->method()) {
			 $data = Arr::map('Security::xss_clean', Request::current()->post());
			 
			 
			 try {
			 $room->edit_room($data, 
			  array('type','price','status','count'));
			
			
			  $this->redirect('room');
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
	$room=ORM::factory('Room',$room->id);
	
	$this->template->content = View::factory('pages/room/edit');
	Settings::set('room',$room);
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
		$query = DB::select('*')->from('rooms')->or_where_open();
		
			
			$query->where('type','=',$data['type']);
			
			if (!empty($data['price'])) {
			$query->or_where('price','<=',$data['price']);
			}
			
			if (!empty($data['status'])) {
			$query->or_where('status','=',$data['status']);
			}
			
			if (!empty($data['count'])) {
			$query->or_where('count','<=',$data['count']);
			}
			
				try {
				$query->or_where_close();
				
				$messages_count=$query->execute()->count();
				$pagination = Pagination::factory(array('total_items' => $messages_count));
				$pagination->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action(),'id' => $this->request->param('id')));
		
				$messages = $query->limit($pagination->items_per_page)->offset($pagination->offset)->as_object()->execute();
				
				
				$this->template->content=View::factory('pages/room/searchlist')
				->bind('messages',$messages)
				->bind('pagination',$pagination);
				
				return TRUE;
				}  catch (ORM_Validation_Exception $e) {
				Settings::set('error',$e->errors('validation'));
				}
		}
		
    $this->template->content=View::factory('pages/room/search');
	}

 
	public function action_delete()
	{
	/**
	* Удаление
	**/
	$id = $this->request->param('id');
	$room=ORM::factory('Room',$id);
	
		if(!$room->loaded()){
			throw HTTP_Exception::factory(404,'Данной комнаты нет');
		}

	$room->remove('client');
	$room->delete();
	

	$this->redirect('room');
	}

} // End Room