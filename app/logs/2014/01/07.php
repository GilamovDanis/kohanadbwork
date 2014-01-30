<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-07 18:44:08 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in file:line
2014-01-07 18:44:08 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('')
#1 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(1210): call_user_func_array(Array, Array)
#2 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(732): Kohana_ORM->run_filter('password', '')
#3 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('password', '')
#4 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(804): Kohana_ORM->__set('password', '')
#5 J:\xampp\htdocs\Gromyko\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->values(Array, Array)
#6 J:\xampp\htdocs\Gromyko\modules\user\classes\Controller\User\Auth.php(44): Model_Auth_User->create_user(Array, Array)
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(84): Controller_User_Auth->action_registration()
#8 [internal function]: Kohana_Controller->execute()
#9 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Auth))
#10 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#13 {main} in file:line
2014-01-07 19:31:46 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
				

			Поле Юзер уже есть в базе 
						Поле E-mail уже есть в базе 
			

								
				
				
						
						

Регистрация

  
  
    Ваш логин
    
      
    
  

  
    Email
    
      
    
  
  
  
    Пароль
    
      
    
  
  

  
    Повторите пароль
    
      
    
  
  
  
    Введите символы
	
	  
		
		function reload(){
		id=Math.floor(Math.random()*1000000);
		$("img.captcha").attr("src","/captcha/default?id="+id);
		}
		
		
		
		  
      
    
  
  
  
  * После регистрации заполните пожалуйста ваш профиль
  
  
  
    
      Регистрация
    
  
 
						
						
						
						
        Меню
                                                    
			 Авторизация
             Забыли пароль?
		


Правила регистрации

Правила регистрации пользователей 
Внимание! При регистрации указывайте пожалуйста только действенный адрес электронной почты. 
После процедуры регистрации на него будет отправлено письмо с подтверждением. 
Только после подтверждения регистрации вы будете считаться пользователем данного сайта.  

Данные правила действуют на всем сайте. 

I. Регистрация пользователей.  

1. Регистрируясь на сайте, пользователь соглашается выполнять данные Правила. 
 2. Для регистрации на сайте пользователь должен предоставить действующий адрес электронной почты. На него будет выслано письмо с подтверждением регистрации. Мы гарантируем конфиденциальность указанной информации. 
 3. Выбор имени пользователя (nickname) является вашим исключительным правом. Администрация оставляет за собой право принять меры к прекращению использования nickname, если его использование нарушает общепринятые моральные и этические нормы или является оскорбительным для других пользователей сайтеа.  
 Запрещена регистрация nickname, схожих с уже существующими до степени, которые могут ввести в заблуждение других пользователей сайта. 
 4. Запрещена неоднократная регистрация одним пользователем, вне зависимости от целей, с которыми такая регистрация проводится. Данное нарушение является крайне серьезным и ведет к блокированию всех учетных записей. 
 5. Если вы не проявляете активность на сайте в течение длительного времени, ваша учетная запись может быть удалена. 

						
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:31:46 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(11): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Auth))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:32:55 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
				  
				  
					
					  
						
						Участники
						
						Школа мышления
						Опорные конструкции
						Дистанционно
						Потребительское
					  
					
					
					
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					   
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					 
					
				  
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:32:55 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(11): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:35:32 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
				  
				  
					
					  
						
						Участники
						
						Школа мышления
						Опорные конструкции
						Дистанционно
						Потребительское
					  
					
					
					
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					   
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					 
					
				  
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:35:32 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(11): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:40:22 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
				  
				  
					
					  
						
						Участники
						
						Школа мышления
						Опорные конструкции
						Дистанционно
						Потребительское
					  
					
					
					
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					   
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					 
					
				  
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:40:22 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(11): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:40:23 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
				  
				  
					
					  
						
						Участники
						
						Школа мышления
						Опорные конструкции
						Дистанционно
						Потребительское
					  
					
					
					
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					   
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					 
					
				  
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:40:23 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(11): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:40:24 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
				  
				  
					
					  
						
						Участники
						
						Школа мышления
						Опорные конструкции
						Дистанционно
						Потребительское
					  
					
					
					
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					   
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					 
					
				  
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:40:24 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(11): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:40:25 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
				  
				  
					
					  
						
						Участники
						
						Школа мышления
						Опорные конструкции
						Дистанционно
						Потребительское
					  
					
					
					
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					   
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					 
					
				  
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:40:25 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(11): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:40:26 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
				  
				  
					
					  
						
						Участники
						
						Школа мышления
						Опорные конструкции
						Дистанционно
						Потребительское
					  
					
					
					
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					   
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					 
					
				  
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:40:26 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(11): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:43:10 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 
Notice:  Undefined variable: title in J:\xampp\htdocs\Gromyko\app\views\templates\include\header.php on line 5

	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
						
Notice:  Undefined variable: user in J:\xampp\htdocs\Gromyko\app\views\templates\include\topmenu.php on line 24
                        Регистрация
                        Авторизация
                        
                        Забыли пароль?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
Notice:  Undefined variable: content in J:\xampp\htdocs\Gromyko\app\views\templates\one.php on line 11
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:43:10 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(28): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(15): Controller_Template->before()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:43:14 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 
Notice:  Undefined variable: title in J:\xampp\htdocs\Gromyko\app\views\templates\include\header.php on line 5

	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
						
Notice:  Undefined variable: user in J:\xampp\htdocs\Gromyko\app\views\templates\include\topmenu.php on line 24
                        Регистрация
                        Авторизация
                        
                        Забыли пароль?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
Notice:  Undefined variable: content in J:\xampp\htdocs\Gromyko\app\views\templates\one.php on line 11
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:43:14 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(28): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(15): Controller_Template->before()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:43:15 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 
Notice:  Undefined variable: title in J:\xampp\htdocs\Gromyko\app\views\templates\include\header.php on line 5

	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
						
Notice:  Undefined variable: user in J:\xampp\htdocs\Gromyko\app\views\templates\include\topmenu.php on line 24
                        Регистрация
                        Авторизация
                        
                        Забыли пароль?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
Notice:  Undefined variable: content in J:\xampp\htdocs\Gromyko\app\views\templates\one.php on line 11
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:43:15 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(28): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(15): Controller_Template->before()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:43:32 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 
Notice:  Undefined variable: title in J:\xampp\htdocs\Gromyko\app\views\templates\include\header.php on line 5

	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
						
Notice:  Undefined variable: user in J:\xampp\htdocs\Gromyko\app\views\templates\include\topmenu.php on line 24
                        Регистрация
                        Авторизация
                        
                        Забыли пароль?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
Notice:  Undefined variable: content in J:\xampp\htdocs\Gromyko\app\views\templates\one.php on line 11
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:43:32 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(28): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(15): Controller_Template->before()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:46:41 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 
Notice:  Undefined variable: title in J:\xampp\htdocs\Gromyko\app\views\templates\include\header.php on line 5

	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
						
Notice:  Undefined variable: user in J:\xampp\htdocs\Gromyko\app\views\templates\include\topmenu.php on line 24
                        Регистрация
                        Авторизация
                        
                        Забыли пароль?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
Notice:  Undefined variable: content in J:\xampp\htdocs\Gromyko\app\views\templates\one.php on line 11
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:46:41 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(28): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(15): Controller_Template->before()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:46:42 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 
Notice:  Undefined variable: title in J:\xampp\htdocs\Gromyko\app\views\templates\include\header.php on line 5

	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
						
Notice:  Undefined variable: user in J:\xampp\htdocs\Gromyko\app\views\templates\include\topmenu.php on line 24
                        Регистрация
                        Авторизация
                        
                        Забыли пароль?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
Notice:  Undefined variable: content in J:\xampp\htdocs\Gromyko\app\views\templates\one.php on line 11
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:46:42 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(28): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(15): Controller_Template->before()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:49:05 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 
Notice:  Undefined variable: title in J:\xampp\htdocs\Gromyko\app\views\templates\include\header.php on line 5

	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
						
Notice:  Undefined variable: user in J:\xampp\htdocs\Gromyko\app\views\templates\include\topmenu.php on line 24
                        Регистрация
                        Авторизация
                        
                        Забыли пароль?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
Notice:  Undefined variable: content in J:\xampp\htdocs\Gromyko\app\views\templates\one.php on line 11
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:49:05 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(28): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(15): Controller_Template->before()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:49:06 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 
Notice:  Undefined variable: title in J:\xampp\htdocs\Gromyko\app\views\templates\include\header.php on line 5

	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
						
Notice:  Undefined variable: user in J:\xampp\htdocs\Gromyko\app\views\templates\include\topmenu.php on line 24
                        Регистрация
                        Авторизация
                        
                        Забыли пароль?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
Notice:  Undefined variable: content in J:\xampp\htdocs\Gromyko\app\views\templates\one.php on line 11
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:49:06 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(28): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(15): Controller_Template->before()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:49:07 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 
Notice:  Undefined variable: title in J:\xampp\htdocs\Gromyko\app\views\templates\include\header.php on line 5

	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
						
Notice:  Undefined variable: user in J:\xampp\htdocs\Gromyko\app\views\templates\include\topmenu.php on line 24
                        Регистрация
                        Авторизация
                        
                        Забыли пароль?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
Notice:  Undefined variable: content in J:\xampp\htdocs\Gromyko\app\views\templates\one.php on line 11
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:49:07 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(28): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(15): Controller_Template->before()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:52:03 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 
Notice:  Undefined variable: title in J:\xampp\htdocs\Gromyko\app\views\templates\include\header.php on line 5

	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
						
Notice:  Undefined variable: user in J:\xampp\htdocs\Gromyko\app\views\templates\include\topmenu.php on line 24
                        Регистрация
                        Авторизация
                        
                        Забыли пароль?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
Notice:  Undefined variable: content in J:\xampp\htdocs\Gromyko\app\views\templates\one.php on line 11
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:52:03 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(28): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(15): Controller_Template->before()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:52:13 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 
Notice:  Undefined variable: title in J:\xampp\htdocs\Gromyko\app\views\templates\include\header.php on line 5

	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
						
Notice:  Undefined variable: user in J:\xampp\htdocs\Gromyko\app\views\templates\include\topmenu.php on line 24
                        Регистрация
                        Авторизация
                        
                        Забыли пароль?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
Notice:  Undefined variable: content in J:\xampp\htdocs\Gromyko\app\views\templates\one.php on line 11
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:52:13 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(28): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(15): Controller_Template->before()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:52:14 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 
Notice:  Undefined variable: title in J:\xampp\htdocs\Gromyko\app\views\templates\include\header.php on line 5

	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
						
Notice:  Undefined variable: user in J:\xampp\htdocs\Gromyko\app\views\templates\include\topmenu.php on line 24
                        Регистрация
                        Авторизация
                        
                        Забыли пароль?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
Notice:  Undefined variable: content in J:\xampp\htdocs\Gromyko\app\views\templates\one.php on line 11
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:52:14 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\app\classes\Controller\Template.php(28): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(15): Controller_Template->before()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:52:49 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
				  
				  
					
					  
						
						Участники
						
						Школа мышления
						Опорные конструкции
						Дистанционно
						Потребительское
					  
					
					
					
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					   
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					 
					
				  
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:52:49 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller\Template.php(44): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Kohana_Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:53:10 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
				  
				  
					
					  
						
						Участники
						
						Школа мышления
						Опорные конструкции
						Дистанционно
						Потребительское
					  
					
					
					
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					   
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					 
					
				  
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:53:10 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller\Template.php(44): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Kohana_Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:53:40 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
				  
				  
					
					  
						
						Участники
						
						Школа мышления
						Опорные конструкции
						Дистанционно
						Потребительское
					  
					
					
					
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					   
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					 
					
				  
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:53:40 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller\Template.php(44): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Kohana_Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:53:41 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
				  
				  
					
					  
						
						Участники
						
						Школа мышления
						Опорные конструкции
						Дистанционно
						Потребительское
					  
					
					
					
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					   
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					 
					
				  
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:53:41 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller\Template.php(44): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Kohana_Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:53:42 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
				  
				  
					
					  
						
						Участники
						
						Школа мышления
						Опорные конструкции
						Дистанционно
						Потребительское
					  
					
					
					
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					   
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					 
					
				  
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:53:42 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller\Template.php(44): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Kohana_Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:54:35 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
				  
				  
					
					  
						
						Участники
						
						Школа мышления
						Опорные конструкции
						Дистанционно
						Потребительское
					  
					
					
					
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					   
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					 
					
				  
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:54:35 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller\Template.php(44): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Kohana_Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:54:41 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
				  
				  
					
					  
						
						Участники
						
						Школа мышления
						Опорные конструкции
						Дистанционно
						Потребительское
					  
					
					
					
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					   
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					 
					
				  
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:54:41 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller\Template.php(44): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Kohana_Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:55:51 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  
     
	 Кооперация
	 
     
	 
	 
	 
	 
    
  

			
                
                  
                    
                    
                    
                  
                  
                
				
                
                  
                    
					
					
                    
                  
                  
					
                    
                      &nbsp;&nbsp;
                      
												Личный профиль
                        
                        Завершить сессию?
						                      
                    
                  
				 
            
	
	    
		
			
												
				
				
				  
				  
					
					  
						
						Участники
						
						Школа мышления
						Опорные конструкции
						Дистанционно
						Потребительское
					  
					
					
					
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					   
						
						Биронт Надия Владимировна
						
						
						
						нет
						
					  
					  
						
						Биронт Надия Владимировна
						
						
						да
						
						
					  
					  
						
						Александр Розенжак
						
						
						да
						
						
					  
					  
						
						Белякова Ольга Александрова
						
						
						
						нет
						
					  
					 
					
				  
				
			
		

		
			
				
				  
					
					
					  Наверх

					  Ссылка 1
					  Ссылка 2
					  Ссылка 3
					   Ссылка 1
					  Ссылка 2
					  Ссылка 3
					  
					
					&copy; Громыко Григорий Олегович. Контакты email@email.ru.
					Создано Gilamov Danis

				  
				
			
		
		
		
		

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:55:51 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller\Template.php(44): Kohana_View::factory(Object(View))
#3 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Kohana_Controller_Template->after()
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-07 19:57:29 --- CRITICAL: Kohana_Exception [ 0 ]: The persona property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php:603
2014-01-07 19:57:29 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('persona')
#1 J:\xampp\htdocs\Gromyko\modules\user\views\user\main.php(1): Kohana_ORM->__get('persona')
#2 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#3 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\xampp\htdocs...', Array)
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 J:\xampp\htdocs\Gromyko\app\views\templates\one.php(11): Kohana_View->__toString()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\xampp\htdocs...', Array)
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Kohana_Controller_Template->after()
#10 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#16 {main} in J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php:603
2014-01-07 20:48:19 --- CRITICAL: Kohana_Exception [ 0 ]: The persona property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php:603
2014-01-07 20:48:19 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('persona')
#1 J:\xampp\htdocs\Gromyko\modules\user\views\user\main.php(1): Kohana_ORM->__get('persona')
#2 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#3 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\xampp\htdocs...', Array)
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 J:\xampp\htdocs\Gromyko\app\views\templates\one.php(11): Kohana_View->__toString()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\xampp\htdocs...', Array)
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Kohana_Controller_Template->after()
#10 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#16 {main} in J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php:603
2014-01-07 20:59:46 --- CRITICAL: Kohana_Exception [ 0 ]: The persona property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php:603
2014-01-07 20:59:46 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('persona')
#1 J:\xampp\htdocs\Gromyko\modules\user\views\user\main.php(1): Kohana_ORM->__get('persona')
#2 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#3 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\xampp\htdocs...', Array)
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 J:\xampp\htdocs\Gromyko\app\views\templates\one.php(11): Kohana_View->__toString()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\xampp\htdocs...', Array)
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Kohana_Controller_Template->after()
#10 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#16 {main} in J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php:603
2014-01-07 21:02:27 --- CRITICAL: Kohana_Exception [ 0 ]: The persona property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php:603
2014-01-07 21:02:27 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('persona')
#1 J:\xampp\htdocs\Gromyko\modules\user\views\user\main.php(1): Kohana_ORM->__get('persona')
#2 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#3 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\xampp\htdocs...', Array)
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 J:\xampp\htdocs\Gromyko\app\views\templates\one.php(11): Kohana_View->__toString()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\xampp\htdocs...', Array)
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Kohana_Controller_Template->after()
#10 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#16 {main} in J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php:603