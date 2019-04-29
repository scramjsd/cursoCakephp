<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="jumbotron">
				<div class="cargos form">
					<?php echo $this->Form->create('Cargo'); ?>
					<fieldset>
						<legend><?php echo __('Add Cargo'); ?></legend>
					<?php
						echo $this->Form->input('nombre', array('class'=>'form-control'));
						echo $this->Form->input('descripcion', array('class'=>'form-control'));
						echo '<br>'.$this->Form->input('active');
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
			<a href="../cargos/index" class="btn btn-warning">Cancelar y ver los cargos</a>
		</div>
	</div>
</div>