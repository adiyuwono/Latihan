<?php
	echo "Latihan Soal";
	echo "\n"; echo "\n"; //Enter
	

	$dataDiri = [
		'nama' => 'adi yuwono',
		'address' => 'Jogjakarta',
		'hobbies' => ['Coding', 'Gaming', "Eat", "Sleep"],
		'is_married' => 'false',
		'school' => ['scholl' => ' SMK Negeri 3 Yogyakarta', 'University' => 'none'],
		'skill' => [
			['php' => 70], 
			['html' => 75],
			['css' => 75],
			['mySQL' => 70]
		]

	];

	$data = json_encode($dataDiri);

	echo $data;
?>