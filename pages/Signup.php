<?php
$title = 'SignUp';
$new = new DatabaseTable('users');
$content = loadTemplate('../template/admin/signupTemp.php',[]);

if(isset($_POST['save'])){
	$criteria = [
		'user_name'=>$_POST['user_name'],
		'user_role'=>2,
		'psw'=>password_hash($_POST['psw'],PASSWORD_DEFAULT)
	];
	$new->save($criteria) ;
	echo "succesfully Created";
	header('Location:index.php');
}

?>