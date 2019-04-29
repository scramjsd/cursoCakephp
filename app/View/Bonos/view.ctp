<div class="container-fluid">
 	<div class="row">
 		<div class="col-md-2"></div>
 		<div class="col-md-8">
		 <div class="bonos view">
<h2><?php echo __('Bono'); ?></h2>
	<table class="table table-striped">
		<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($bono['Bono']['id']); ?>
			&nbsp;
		</td>
		<td><?php echo __('Num Bono'); ?></td>
		<td>
			<?php echo h($bono['Bono']['num_bono']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Seguro'); ?></td>
		<td>
			<?php echo h($bono['Bono']['seguro']); ?>
			&nbsp;
		</td>
		<td><?php echo __('Fec Bono'); ?></td>
		<td>
			<?php echo h($bono['Bono']['fec_bono']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Hora Bono'); ?></td>
		<td>
			<?php echo h($bono['Bono']['hora_bono']); ?>
			&nbsp;
		</td>
		<td><?php echo __('Valor Bono'); ?></td>
		<td>
			<?php echo h($bono['Bono']['valor_bono']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($bono['Bono']['created']); ?>
			&nbsp;
		</td>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($bono['Bono']['modified']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Usuario'); ?></td>
		<td>
			<?php echo $this->Html->link($bono['Usuario']['user'], array('controller' => 'usuarios', 'action' => 'view', $bono['Usuario']['id'])); ?>
			&nbsp;
		</td>
		<td><?php echo __('Atencione'); ?></td>
		<td>
			<?php echo $this->Html->link($bono['Atencione']['fec_atenciones'], array('controller' => 'atenciones', 'action' => 'view', $bono['Atencione']['id'])); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Paciente'); ?></td>
		<td>
			<?php echo $this->Html->link($bono['Paciente']['rut'], array('controller' => 'pacientes', 'action' => 'view', $bono['Paciente']['id'])); ?>
			&nbsp;
		</td>
		<td><?php echo __('Profesionale'); ?></td>
		<td>
			<?php echo $this->Html->link($bono['Profesionale']['rut'], array('controller' => 'profesionales', 'action' => 'view', $bono['Profesionale']['id'])); ?>
			&nbsp;
		</td>
		</tr>
	</table><br>
			<a href="../index" class="btn btn-warning">volver a ver los bonos</a>
			</div>
		</div>
 		<div class="col-md-2">
		</div>
	</div>
 </div>
