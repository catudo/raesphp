<?php echo $this->Html->script('datatables/jquery.dataTables.min.js'); ?>
<?php echo $this->Html->script('raesphp.rae.js'); ?>


<div class="box grid_7">  <h2>

<a href="#"> Agregar Raes </a>

</h2> 

<div class="box">

<form id="raesForm">

<fieldset class="login">
<legend>Almacenar Raes</legend>
								<p>
									<label> nombre: </label>
									<input type="text" value="" name="name" id="name"">
								</p>
								<p>
									<label> cuidad: </label>
									<input type="text" value="" name="city" id="city">
								</p>
								
								<p>
									<label> Descripcion: </label>
									<textarea  cols="50" rows="5" value="" name="description" id="description">
							        </textarea>
								</p>
								
							
						
				<input type="submit" class="register-button" value="Registrar">
</fieldset>							
   </form>
   
    </div>
</div>

<div class="box grid_8">  
<h2>Lista</h2>

<div id="raelist">


</div>
</div>

<div class="box grid_8">  
<h2>Lista Descripcion</h2>

<div id="deslist">

</div>

<div class="box grid_8">  
<h2>Iso</h2>

<div id="isolist">

</div>