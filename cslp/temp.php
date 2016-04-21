<?php
	$temp = "Hello World I'm Tarzan";
	$temp = explode(" ", $temp);
	print_r($temp);
	foreach($temp as $key=>$value){
		echo $temp[$key]=$value."*";
	}
	$temp = implode(" ", $temp);
	echo '<br>NEW VALUE: '.$temp . '<br>';
	echo 'FUCKED UP VALUE: ' . preg_replace("/[^A-Za-z0-9]/", ' ', $temp) . '<br>';
	echo 'NEW VALUE: '.$temp . '<br>';
?>
<html>
<body>
	<table border=1px>
		<tr><td>qwe</td><td><table><tr><td>ROCK n ROLL</td></tr><tr><td>ROCK n ROLL</td></tr><tr><td>foobar</td></tr></table></td></tr>
		<tr><td>foobar</td><td>FU BITS</td></tr>	
	</table>
</body>
</html>