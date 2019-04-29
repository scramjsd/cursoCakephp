		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="jumbotron">
<div class="profesionales form">
<?php echo $this->Form->create('Profesional'); ?>
	<fieldset>
		<legend><?php echo __('Edit Profesionale'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class'=>'form-control'));
		echo $this->Form->input('rut', array('class'=>'form-control'));
		echo $this->Form->input('nombres', array('class'=>'form-control'));
		echo $this->Form->input('apellidos', array('class'=>'form-control'));
		echo $this->Form->input('telefono', array('class'=>'form-control'));
		echo $this->Form->input('email', array('class'=>'form-control'));
		echo $this->Form->input('curriculum', array('class'=>'form-control'));
		echo $this->Form->input('fec_nac', array('class'=>'form-control'));
		echo '<br>'.$this->Form->input('activo');
		echo $this->Form->input('cargo_id', array('class'=>'form-control'));
	?>
	</fieldset>
	<div class="container">
		<div class="row">
			<div class="col-md-9"></div>
			<div class="col-md-3">
				<?php echo '<br>'.$this->Form->button('Guardar Cambios',array('class'=>'btn btn-success')); ?>
				<?php echo '<br>'.$this->Form->end(); ?>
			</div>
		</div>
	</div>
	</div>
			</div>
		</div>
		<div class="col-md-3">
			<br>
			<a href="../../profesionales/index" class="btn btn-warning">Cancelar y ver los proefsionales</a>
		</div>
	</div>
</div>
						
				
					
				