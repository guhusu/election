<?

$da=array(
	'1' => '6rZKdLGUfFA',
	'2' => 'YRATE-N3f1I',
	'3' => 's5xJOnCLAuU',
	'4' => 'UExh3xU_c5A',
	'5' => 'O5LEi1tFEco',
	'6' => '1MU1ZlFXKu4',
	'7' => '7nSJA64GkXU',
	'8' => 'D1qLvO7w3uY',
	'9' => 'uI0u7IpLxUQ',
	'10' => 'Ih8_0ZGimSE',
	'11' => 'ziiQuGpUffA',
	'12' => 'KqPhhM9yyTk',
	'13' => 'GMUxUtPlcoI',
	'14' => 'CSrGdAINzps',
	'15' => 'Jl3OoKOHwok'
);

foreach($da as $k => $v){
	$url = 'http://i.ytimg.com/vi/'.$v.'/1.jpg';
	$img = 'video/'.$k.'.jpg';
	file_put_contents($img, file_get_contents($url));
}
?>
