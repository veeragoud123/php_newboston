<?php
$four_weeler=array('super_car'=>array('tesla'),

		      	   'moderate_car'=>array(
		      		'audi'=>array('q1','a4','a6','a5'),
		      		'bentley'=>array('1','2','3'),
		      		'ferrari'=>array('f1','f2','f3')),

		      'normal_car'=>array(
		      	'maruthi'=>array('alto','ciaz'),
		      	'toyota',
		      	'hyundai'=>array('i10',
		      					'i20'=>array('magna','asta','sports')),
		      'ford'=>array('ford_aspire',
		      	'eco_sport'=>array('petrol','diesel'),'fortuner'))
		  );

// echo $four_weeler['normal_car']['ford']['eco_sport'][0];
//echo $four_weeler['moderate_car']['bentley'];

//$four_weeler['normal_car']['ford'][2]='fortuner';

print_r($four_weeler);


?>