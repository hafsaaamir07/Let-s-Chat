<?php

$path = getcwd().'/data';
$room = $_POST['room'];
$pokemon = $_POST['pokemon'];
$name = $_POST['name'];



if ($pokemon && $room){
	print "ok";
	file_put_contents($path.'/'.$room.'.txt',$name." : ".$pokemon."\n",FILE_APPEND);

}
else {
	print "sorry";
}

?>