<?php 


//Task 2-1
$arr = ['Html', 'CSS', 'Javascript', 'PHP'];
function paragraph($string_arr, $bool){
	if ($bool === true){
		foreach ($string_arr as $value) {
			echo  '<p>' . $value .'</p>' ;
		}
	} 
	else{
		 foreach ($string_arr as $value) {
		 echo  $value;}
	}
};
paragraph($arr, true);


// //Task 2-2
function calcEverything($operation, ...$arrgs){

	print_r($arrgs);
	switch ($operation) {
		case '+':
			echo array_sum($arrgs);
			break;
		case '*':
			echo array_product($arrgs);
			break;
		case '-':
			$result = 0;
			for($i = 0; count($arrgs) > $i; $i++){
				 $result -= $arrgs[$i];
			}
			echo $result;
			break;
		case '/':
			$result = reset($arrgs);
			for($i = 0; count($arrgs) > $i; $i++){
				 $result /= $arrgs[$i];
			}
			echo $result;
			break;
		default:
			echo "Sorry!";
			break;
	}
}
calcEverything('/', 2, 2, 100);


//Task 2-3 

function  table($rows, $cols){
	if ( is_integer($rows) && is_integer($cols) ){
		 echo '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){ 
    echo '<tr>';
    for ($td=1; $td<=$cols; $td++){ 
    	$summa = $tr*$td;
    	echo '<td>'.   $summa .'</td>';
    }
    	echo '</tr>';
	}

	echo '</table>';

	} else{
		echo 'Error! Uncorrected data!';
	}
}
table(8, 8);
// Task 2-4 
$date = '2016-02-24 00:00:00';
echo 'Дата 2016-02-24 00:00:00 в формате unixtime - ' . strtotime($date) . '<br>';
echo 'Текущая дата ' . (date("d.m.Y G:i")). '<br>';

//Task 2-5
$string1 = 'Карл у Клары украл Кораллы';
$K = str_replace('К', '', $string1);
echo $K .'<br>';
$string2 = 'Две бутылки лимонада.';
$replace = str_replace('Две', 'Три', $string2);
echo $replace. '<br>';

//Task 2-6
$text = 'Hello again!';
$fp = fopen('text.txt', 'w');
fwrite($fp, $text);
fclose($fp);

echo file_get_contents('./text.txt', true);
?>