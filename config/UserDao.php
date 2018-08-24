<?php

include 'Conexion.php';
include '../models/User.php';

class UserDao extends Conexion

{
	protected static $cnx;

	private static function  getConexion()
	{
		self::$cnx = Conexion::conectar();
	}
	private static function desconectar()
	{
		self::$cnx = null;
	}
	public static function login ($user)
	{
		$query = ("SELECT *
					FROM users
					WHERE correo_user = :correo_user");

			self::getConexion();

			$correo_user = $user->getCorreo_user();

			$resultado = self::$cnx->prepare($query);
			$resultado->bindParam(":correo_user", $correo_user);

			$resultado->execute();

			if($resultado->rowCount() > 0){
                  $row = $resultado->fetch(PDO::FETCH_ASSOC);

                  if( password_verify($_POST['pass_user'], $row['pass_user']) ){

                      if($row['correo_user'] == $correo_user){
                          return true;
                      }

                  } else {
                      echo "Password o email invalido";
                  }

                }

  }
}
