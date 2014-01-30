<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Date extends Kohana_Date {
   
   public static function timef($time=NULL) {
   
   $labelTime = date('d.m.Y', $time); 

		  $arrM = array( 
		  '01'=>'янв', '02'=>'фев', '03'=>'мар', '04'=>'апр',  
		  '05'=>'май', '06'=>'июн', '07'=>'июл', '08'=>'авг',  
		  '09'=>'сен', '10'=>'окт', '11'=>'ноя', '12'=>'дек' 
		  ); 

		  if ($labelTime == date('d.m.Y')) { 
			 return 'Сегодня в '.date('H:i', $time); 
		  } elseif ($labelTime == (date('d') - 1).'.'.date('m.Y')) { 
			 return 'Вчера в '.date('H:i', $time); 
		  } else { 
			 return date('d', $time).' '.$arrM[date('m', $time)].' '.date('Y', $time).' в '.date('H:i', $time); 
		  } 
   } 
   
   
   public static function zodiak($d,$m) {
   
	if($m=='1' || $m=='01') {
		if(20<=$d){ 
		$z=1;
		} else {
		$z=2;
		}
	}
	
	if($m=='2' || $m=='02'){
		if(19<=$d) {
		$z=3;
		} else {
		$z=1;
		}
	}
	
	if($m=='3' || $m=='03'){
		if(21<=$d) { 
		$z=4;
		} else {
		$z=3;
		}
	}
	
	if($m=='4' || $m=='04'){
		if(21<=$d) { 
		$z=5;
		} else {
		$z=4;
		}
	}
	
	if($m=='5' || $m=='05'){
		if(21<=$d) {
		$z=6;
		} else {
		$z=5;
		}
	}
	
	if($m=='6' || $m=='06'){
		if(22<=$d) {
		$z=7;
		} else {
		$z=6;
		}
	}
	
	if($m=='7' || $m=='07'){
		if(23<=$d){
		$z=8;
		} else {
		$z=7;
		}
	}
	
	if($m=='8' || $m=='08'){
		if(23<=$d){
		$z=9;
		} else {
		$z=8;
		}
	}
	
	if($m=='9' || $m=='09'){
		if(23<=$d){$z='10.Весы';
		} else{
		$z=9;
		}
	}
	
	if($m=='10'){
		if(23<=$d){
		$z=11;
		} else {
		$z=10;
		}
	}
	
	if($m=='11'){
		if(22<=$d){
		$z=12;
		} else {
		$z=11;
		}
	} 
	
	if($m=='12'){
		if(22<=$d){
		$z=2;
		} else {
		$z=12;
		}
	}


	return '<img src="/theme/icons/zodiak/'.(int)$z.'.gif" />';
	}
}