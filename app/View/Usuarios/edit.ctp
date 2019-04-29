<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="jumbotron">
			<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class'=>'form-control'));
		echo $this->Form->input('user', array('class'=>'form-control'));
		echo $this->Form->input('pass', array('class'=>'form-control'));
		echo $this->Form->input('foto', array('class'=>'form-control'));
		echo $this->Form->input('tipo_usuario_id', array('class'=>'form-control'));
		echo $this->Form->input('paciente_id', array('class'=>'form-control'));
		echo $this->Form->input('profesionale_id', array('class'=>'form-control'));
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
			<a href="../../usuarios/index" class="btn btn-warning">Cancelar y ver los usuarios</a>
		</div>
	</div>
</div>