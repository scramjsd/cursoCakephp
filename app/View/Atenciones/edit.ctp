<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="jumbotron">
			<div class="atenciones form">
<?php echo $this->Form->create('Atencione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Atencione'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class'=>'form-control'));
		echo $this->Form->input('fec_atenciones', array('class'=>'form-control'));
		echo $this->Form->input('hora_atenciones', array('class'=>'form-control'));
		echo $this->Form->input('valor', array('class'=>'form-control'));
		echo $this->Form->input('estado_cancelacion', array('class'=>'form-control'));
		echo $this->Form->input('estado_atenciones', array('class'=>'form-control'));
		echo $this->Form->input('activo');
		echo $this->Form->input('razon_desactivacion', array('class'=>'form-control'));
		echo $this->Form->input('usuario_id', array('class'=>'form-control'));
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
			<a href="../../atenciones/index" class="btn btn-warning">Cancelar y ver las atenciones</a>
		</div>
	</div>
</div>
