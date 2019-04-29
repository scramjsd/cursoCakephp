<div class="container-fluid">
 	<div class="row">
 		<div class="col-md-2"></div>
 		<div class="col-md-8">
		 <div class="atenciones view">
<h2><?php echo __('Atencion'); ?></h2>
	<table class="table table-striped">
		<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($atencione['Atencione']['id']); ?>
			&nbsp;
		</td>
		<td><?php echo __('Fec Atenciones'); ?></td>
		<td>
			<?php echo h($atencione['Atencione']['fec_atenciones']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Hora Atenciones'); ?></td>
		<td>
			<?php echo h($atencione['Atencione']['hora_atenciones']); ?>
			&nbsp;
		</td>
		<td><?php echo __('Valor'); ?></td>
		<td>
			<?php echo h($atencione['Atencione']['valor']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Estado Cancelacion'); ?></td>
		<td>
			<?php echo h($atencione['Atencione']['estado_cancelacion']); ?>
			&nbsp;
		</td>
		<td><?php echo __('Estado Atenciones'); ?></td>
		<td>
			<?php echo h($atencione['Atencione']['estado_atenciones']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Activo'); ?></td>
		<td>
			<?php echo h($atencione['Atencione']['activo']); ?>
			&nbsp;
		</td>
		<td><?php echo __('Razon Desactivacion'); ?></td>
		<td>
			<?php echo h($atencione['Atencione']['razon_desactivacion']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($atencione['Atencione']['created']); ?>
			&nbsp;
		</td>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($atencione['Atencione']['modified']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Usuario'); ?></td>
		<td>
			<?php echo $this->Html->link($atencione['Usuario']['user'], array('controller' => 'usuarios', 'action' => 'view', $atencione['Usuario']['id'])); ?>
			&nbsp;
		</td>
		<td><?php echo __('Paciente'); ?></td>
		<td>
			<?php echo $this->Html->link($atencione['Paciente']['rut'], array('controller' => 'pacientes', 'action' => 'view', $atencione['Paciente']['id'])); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Profesionale'); ?></td>
		<td>
			<?php echo $this->Html->link($atencione['Profesionale']['rut'], array('controller' => 'profesionales', 'action' => 'view', $atencione['Profesionale']['id'])); ?>
			&nbsp;
		</td>
		<td></td>
		<td></td>
		</tr>
	</table>
			<br>
			<a href="../index" class="btn btn-warning">volver a ver las atenciones</a>
</div>
</div>
</div>
</div>
