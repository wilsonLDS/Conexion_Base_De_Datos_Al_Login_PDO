<?php 
//Encabezado de la pagina
include ('../../views/front/templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>
	<h1>Regístrate</h1>
<div class="containerderegistre">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Nombres Completos</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Nombres Completos...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">E-mail</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="E-mail...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Tipo users</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Tipo Users</option>
          <option value="canada">Aprendiz</option>
          <option value="usa">Instrutor</option>
          <option value="usa">Afisionado</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">password</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="password...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Confirmar password</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Confirmar password.    ..">
      </div>
    </div>
        <div class="row">
      <div class="col-25">
        <label for="country">Tipo De Documento</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option >Tipo De Documento</option>
          <option value="australia">Cedula De Ciudadania</option>
          <option value="canada">Registro Civil</option>
          <option value="usa">Targeta De Identidad</option>
          <option value="usa">Documento Extrangero</option>
        </select>
      </div>
    </div>
      <div class="row">
      <div class="col-25">
        <label for="subject">Numero De Documento</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="area de conocimiento...">
      </div>
    </div>
   <div class="row">
      <div class="col-25">
        <label for="country">Pais</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option >Pais</option>
          <option value="australia">mexico</option>
          <option value="canada">brasil</option>
          <option value="usa">panama</option>
          <option value="usa">colombia</option>
        </select>
      </div>
      <div class="row">
      <div class="col-25">
        <label for="subject">area de conocimiento</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="area de conocimiento...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Area De Formacion</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="programacion">diseño</option>
          <option value="diseño">programacion</option>
          <option value="audiovisuales">audiovisuales</option>
          <option value="usa">proyectos</option>
        </select>
      </div>
  </div>
      <div class="col-75">
        <select id="country" name="country">
          <option >Genero</option>
          <option value="programacion">hombre</option>
          <option value="diseño">mujer</option>
          <option value="audiovisuales">sin definir</option>
        </select>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option >Año De Nacimiento</option>
          <option value="programacion">2010</option>
          <option value="diseño">2011</option>
          <option value="audiovisuales">2012</option>
          <option value="usa">2013</option>
          <option value="usa">2014</option>
          <option value="usa">2015</option>
          <option value="usa">2016</option>
          <option value="usa">2017</option>
          <option value="usa">2018</option>
        </select>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option >Mes De Nacimiento</option>
          <option value="enero">enero</option>
          <option value="febrero">febrero</option>
          <option value="marzo">marzo</option>
          <option value="abril">abril</option>
          <option value="mayo">mayo</option>
          <option value="junio">junio</option>
          <option value="julio">julio</option>
          <option value="agosto">agosto</option>
          <option value="septiembre">septiembre</option>
          <option value="noviembre">noviembre</option>
          <option value="diciembre">diciembre</option>
        </select>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option >Dia De Nacimiento</option>
          <option value="enero">1</option>
          <option value="febrero">2</option>
          <option value="marzo">3</option>
          <option value="abril">4</option>
          <option value="mayo">5</option>
          <option value="junio">6</option>
          <option value="julio">7</option>
          <option value="agosto">8</option>
          <option value="septiembre">9</option>
          <option value="noviembre">10</option>
          <option value="diciembre">11</option>
          <option value="agosto">12</option>
          <option value="septiembre">13</option>
          <option value="noviembre">14</option>
          <option value="diciembre">15</option>
          <option value="septiembre">16</option>
          <option value="noviembre">17</option>
          <option value="diciembre">18</option>
          <option value="agosto">19</option>
          <option value="septiembre">20</option>
          <option value="noviembre">21</option>
          <option value="diciembre">22</option>
          <option value="noviembre">23</option>
          <option value="diciembre">24</option>
          <option value="agosto">22</option>
          <option value="septiembre">23</option>
          <option value="noviembre">24</option>
          <option value="diciembre">25</option>
          <option value="noviembre">26</option>
          <option value="diciembre">27</option>
          <option value="agosto">28</option>
          <option value="septiembre">29</option>
          <option value="noviembre">30</option>
          <option value="diciembre">31</option>
        </select>
      </div>
    <div class="row">
      <input type="submit" value="Regístrate"></imput>
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>


<?php include ('../../views/front/templates/foot.php'); ?>