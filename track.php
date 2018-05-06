<!-- cookies.php -->

<!DOCTYPE html>
<html lang="en">
	<head><meta charset = "utf-8">
		<title> Track</title>	
	</head>
	<body>
	<?php
	$count = 0;
	date_default_timezone_set("America/Toronto");
	if(isset($_COOKIE['count'])){
	$count = $_COOKIE['count'];
	$count ++;
	}
	if(isset($_COOKIE['last'])){
	$last = $_COOKIE['last'];
	}
	setcookie('count', $count, time()+3600);
	setcookie('last', date("d-m-Y H:i:s"), time()+3600);
	if($count == 0){
	echo "Welcome! You are a new customer here.";
	}
	else{
	echo "Hello, this is your ".$count." time here.<br/>";
	echo "Last visited time: ".$last;
	}?>
	</body>
</html>
