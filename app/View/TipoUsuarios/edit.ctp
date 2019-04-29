<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="jumbotron">
<div class="tipoUsuarios form">
<?php echo $this->Form->create('TipoUsuario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipo Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class'=>'form-control'));
		echo $this->Form->input('nombre', array('class'=>'form-control'));
		echo $this->Form->input('descripcion', array('class'=>'form-control'));
		echo $this->Form->input('activo');
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
			<a href="../../tipousuarios/index" class="btn btn-warning">Cancelar y ver los tipos de usuario"</a>
		</div>
	</div>
</div>