<?php

$path = getcwd().'/data';
$chatrooms =$_POST['chatrooms'];

if ($chatrooms == "room1"){
	file_put_contents($path.'/room1.txt',"");
	file_put_contents($path.'/history.txt',$_COOKIE['name'].",".time().",".$_SERVER['REMOTE_ADDR'].","."cleared room1"."\n",FILE_APPEND);
	header('Location: admin.php?clear=success');
	exit();
}
else if ($chatrooms == "room2"){
	file_put_contents($path.'/room2.txt',"");
	file_put_contents($path.'/history.txt',$_COOKIE['name'].",".time().",".$_SERVER['REMOTE_ADDR'].","."cleared room2"."\n",FILE_APPEND);
	header('Location: admin.php?clear=success');
	exit();

}
else if ($chatrooms == "room3"){
	file_put_contents($path.'/room3.txt',"");
	file_put_contents($path.'/history.txt',$_COOKIE['name'].",".time().",".$_SERVER['REMOTE_ADDR'].","."cleared room3"."\n",FILE_APPEND);
	header('Location: admin.php?clear=success');
	exit();
}
else{
	header('Location: admin.php?notadmin=unsucessful');
}



?>