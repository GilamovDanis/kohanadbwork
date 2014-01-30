<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * ��������� ��� ������� �������������(�� ���������)
 */
return array
(
	/**
	* ���� ��� Cookie
	*/
	'cookiesalt' => '421341kd;sakda;dasdadkadas',
        
     /**
     * ��������� ���� 
     */
     'timezone'  => 'Europe/Moscow',
        
     /**
     * ����
     */
     'lang'  => 'ru-ru',
        
      /**
      * ������� ������ (Production|development)
      */
      'error_level' => Kohana::DEVELOPMENT,
	
	/**
	 * ������������ ������
	 */
	'modules' => array(	
		/**
		* System modules
		*/
		'cache'      => MODPATH.'cache',         // Caching with multiple backends
		'database'   => MODPATH.'database',      // Database access
		'orm'        => MODPATH.'orm',           // Object Relationship Mapping
		'htmlpurifier' => MODPATH.'htmlpurifier',// HtmlPurifier
		'pagination' => MODPATH.'pagination',    // Pagination
		
		/**
		* APP modules
		*/
		),
);
