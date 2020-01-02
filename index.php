<?php
// $hello = [1,2,3];
// $array  = array('name' =>'Vadim' , 'age' => '24', 'city' => 'Minsk');
// define('myname', 'Vadim', true);
// var_dump(myname);
// $year = 2019;
// if( $year === 2019)
// 	echo 'success';
// 	else
// 	echo 'sorry';

// $x = 0;
// while ($x++ < 10) {
// 	echo $x;
// }

// $names[] = 'Manya';
// $names[] = 'Murka';
// $names[] = 'Dikiy';
// foreach ($names as  $value) {
// 	echo "<b>$value</b><br>";
// }

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
// function calcEverything(){
// 	for ($i = 1; $i < func_num_args(); $i++){
// 		$summa = func_get_arg($i) ;
// 		echo func_get_arg();
// 	}
// }
// calcEverything('+', 11, 0, 3);


// function foo()
// {
//      $numargs = func_num_args();
//      echo "Количество аргументов: $numargs\n";
//      if ($numargs >= 2) {
//          echo "Второй аргумент: " . func_get_arg(1) . "\n";
//      }
// }

// foo(1, 2, 3);

// function get_parameters()
// {
//  for ($i = 0; $i < func_num_args(); $i++) {
//  echo "Параметр номер $i: " . func_get_arg($i) .
// "<br>";
//  }
// }
// // Вызываем функцию
// echo get_parameters("Hello,", "world", "!"); 

//Task 2-3 

function  table($rows, $cols){
	if ( is_integer($rows) && is_integer($cols) ){
		 echo '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){ 
    echo '<tr>';
    for ($td=1; $td<=$cols; $td++){ 
    	$summa = $tr*$td;
    	if ($summa % 2 == 0){
    		 echo '<td>'.   $summa .'</td>';
    	} else {
			echo '<td>'.  $summa .'</td>';
    	} 
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
