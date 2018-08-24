<?php

include '../config/UserDao.php';
class UserController{

	public static function login($correo_user, $pass_user){
		$obj_user = new User();
		$obj_user->setcorreo_user($correo_user);
		$obj_user->setpass_user($pass_user);

		return UserDao::login($obj_user);
}
 }
