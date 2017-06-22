
<?php

$models = array(
[
'name' => 'Audi',
'models' => ['A1', 'A2', 'A3', 'A4', 'A5']
],
[
'name' => 'Lada',
'models' => ['21001', '21005', '21007', '21009', '21011']
],
[
'name' => 'BMW',
'models' => ['520', '528', '530', '535', '540']
],
[
'name' => 'Mercedes',
'models' => ['E190', 'E200', 'E220', 'E240', 'E280']
]
);


 
if($_GET['carname']=='Audi')
{
	for ($i=0; $i < count($models[0]['models'])  ; $i++) { 
		echo $models[0]['models'][$i]."</br>";
	}

}
else if($_GET['carname']=='Lada')
{
	for ($i=0; $i < count($models[1]['models'])  ; $i++) { 
		echo $models[1]['models'][$i]."</br>";
	}

}
else if($_GET['carname']=='BMW')
{
	for ($i=0; $i < count($models[2]['models'])  ; $i++) { 
		echo $models[2]['models'][$i]."</br>";
	}

}
else if($_GET['carname']=='Mercedes')
{
	for ($i=0; $i < count($models[3]['models'])  ; $i++) { 
		echo $models[3]['models'][$i]."</br>";
	}

}
?>