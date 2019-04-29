<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="jumbotron"><div class="bonos form">
<?php echo $this->Form->create('Bono'); ?>
	<fieldset>
		<legend><?php echo __('Add Bono'); ?></legend>
	<?php
		echo $this->Form->input('num_bono', array('class'=>'form-control'));
		echo $this->Form->input('seguro', array('class'=>'form-control'));
		echo $this->Form->input('fec_bono', array('class'=>'form-control'));
		echo $this->Form->input('hora_bono', array('class'=>'form-control'));
		echo $this->Form->input('valor_bono', array('class'=>'form-control'));
		echo $this->Form->input('usuario_id', array('class'=>'form-control'));
		echo $this->Form->input('atencione_id', array('class'=>'form-control'));
		echo $this->Form->input('paciente_id', array('class'=>'form-control'));
		echo $this->Form->input('profesionale_id', array('class'=>'form-control'));
	?>
	</fieldset>
	<div class="container">
						<div class="row">
							<div class="col-md-9"></div>
							<div class="col-md-3">
								<?php echo '<br>'.$this->Form->button('Añadir Cargo',array('class'=>'btn btn-success')); ?>
								<?php echo '<br>'.$this->Form->end(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<br>
			<a href="../bonos/index" class="btn btn-warning">Cancelar y ver los bonos</a>
		</div>
	</div>
</div>