<?php 
//Encabezado de la pagina
include ('../../views/front/templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>
	<h1>INGRESO</h1>
	<div class="div1">
		<form class="" action="http://localhost/login/views/front/validarCode.php" method="post">
    		<input type="E-mail"  name="correo_user" placeholder="E-mail">
    		<input type="Password"   name="pass_user" placeholder="Password">
       			<select id="country" name="tipo_user">
       				<option value="1">Aprendiz</option>
      				<option value="2">Instructor</option>
      				<option value="3">Cordinador</option>
    			</select>
    			<input type="radio" name="Recordar Contraseña" >
    			<label>Recordar Contraseña</label>
    			<input type="radio" name="No Recordar Contraseña">
    			<label>No Recordar Contraseña</label>
    		<button type="submit" class="input1" value="ENTRAR">Entrar</button>
		</form>
	</div>

<?php include ('../../views/front/templates/foot.php'); ?>
		