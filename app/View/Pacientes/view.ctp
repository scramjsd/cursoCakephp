<div class="container-fluid">
 	<div class="row">
 		<div class="col-md-2"></div>
 		<div class="col-md-8">
		<div class="pacientes view">
<h2><?php echo __('Paciente'); ?></h2>
	<table class="table table-striped">
		<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($paciente['Paciente']['id']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Rut'); ?></td>
		<td>
			<?php echo h($paciente['Paciente']['rut']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Nombres'); ?></td>
		<td>
			<?php echo h($paciente['Paciente']['nombres']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Apellidos'); ?></td>
		<td>
			<?php echo h($paciente['Paciente']['apellidos']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Telefono'); ?></td>
		<td>
			<?php echo h($paciente['Paciente']['telefono']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Email'); ?></td>
		<td>
			<?php echo h($paciente['Paciente']['email']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Fec Nac'); ?></td>
		<td>
			<?php echo h($paciente['Paciente']['fec_nac']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Historial Citas'); ?></td>
		<td>
			<?php echo h($paciente['Paciente']['historial_citas']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Historial Recetas'); ?></td>
		<td>
			<?php echo h($paciente['Paciente']['historial_recetas']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($paciente['Paciente']['created']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($paciente['Paciente']['modified']); ?>
			&nbsp;
		</td>
		</tr>
	</table>
			<br>
			<a href="../index" class="btn btn-warning">volver a ver los pacientes</a><br><br>
</div>
<div class="related">
	<h3><?php echo __('Related Atenciones'); ?></h3>
	<?php if (!empty($paciente['Atencione'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fec Atenciones'); ?></th>
		<th><?php echo __('Hora Atenciones'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Estado Cancelacion'); ?></th>
		<th><?php echo __('Estado Atenciones'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Razon Desactivacion'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Paciente Id'); ?></th>
		<th><?php echo __('Profesionale Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($paciente['Atencione'] as $atencione): ?>
		<tr>
			<td><?php echo $atencione['id']; ?></td>
			<td><?php echo $atencione['fec_atenciones']; ?></td>
			<td><?php echo $atencione['hora_atenciones']; ?></td>
			<td><?php echo $atencione['valor']; ?></td>
			<td><?php echo $atencione['estado_cancelacion']; ?></td>
			<td><?php echo $atencione['estado_atenciones']; ?></td>
			<td><?php echo $atencione['activo']; ?></td>
			<td><?php echo $atencione['razon_desactivacion']; ?></td>
			<td><?php echo $atencione['created']; ?></td>
			<td><?php echo $atencione['modified']; ?></td>
			<td><?php echo $atencione['usuario_id']; ?></td>
			<td><?php echo $atencione['paciente_id']; ?></td>
			<td><?php echo $atencione['profesionale_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'atenciones', 'action' => 'view', $atencione['id']), array('class'=>'btn btn-outline-primary')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'atenciones', 'action' => 'edit', $atencione['id']), array('class'=>'btn btn-outline-success')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'atenciones', 'action' => 'delete', $atencione['id']), array('class'=>'btn btn-outline-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $atencione['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div><br><br>
<div class="related">
	<h3><?php echo __('Related Bonos'); ?></h3>
	<?php if (!empty($paciente['Bono'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Num Bono'); ?></th>
		<th><?php echo __('Seguro'); ?></th>
		<th><?php echo __('Fec Bono'); ?></th>
		<th><?php echo __('Hora Bono'); ?></th>
		<th><?php echo __('Valor Bono'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Atencion Id'); ?></th>
		<th><?php echo __('Paciente Id'); ?></th>
		<th><?php echo __('Profesionale Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($paciente['Bono'] as $bono): ?>
		<tr>
			<td><?php echo $bono['id']; ?></td>
			<td><?php echo $bono['num_bono']; ?></td>
			<td><?php echo $bono['seguro']; ?></td>
			<td><?php echo $bono['fec_bono']; ?></td>
			<td><?php echo $bono['hora_bono']; ?></td>
			<td><?php echo $bono['valor_bono']; ?></td>
			<td><?php echo $bono['created']; ?></td>
			<td><?php echo $bono['modified']; ?></td>
			<td><?php echo $bono['usuario_id']; ?></td>
			<td><?php echo $bono['atencion_id']; ?></td>
			<td><?php echo $bono['paciente_id']; ?></td>
			<td><?php echo $bono['profesionale_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bonos', 'action' => 'view', $bono['id']), array('class'=>'btn btn-outline-primary')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bonos', 'action' => 'edit', $bono['id']), array('class'=>'btn btn-outline-success')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bonos', 'action' => 'delete', $bono['id']), array('class'=>'btn btn-outline-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $bono['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div><br><br>
<div class="related">
	<h3><?php echo __('Related Usuarios'); ?></h3>
	<?php if (!empty($paciente['Usuario'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User'); ?></th>
		<th><?php echo __('Pass'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Tipo Usuario Id'); ?></th>
		<th><?php echo __('Paciente Id'); ?></th>
		<th><?php echo __('Profesionale Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($paciente['Usuario'] as $usuario): ?>
		<tr>
			<td><?php echo $usuario['id']; ?></td>
			<td><?php echo $usuario['user']; ?></td>
			<td><?php echo $usuario['pass']; ?></td>
			<td><?php echo $usuario['foto']; ?></td>
			<td><?php echo $usuario['created']; ?></td>
			<td><?php echo $usuario['modified']; ?></td>
			<td><?php echo $usuario['tipo_usuario_id']; ?></td>
			<td><?php echo $usuario['paciente_id']; ?></td>
			<td><?php echo $usuario['profesionale_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuarios', 'action' => 'view', $usuario['id']), array('class'=>'btn btn-outline-primary')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id']), array('class'=>'btn btn-outline-success')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), array('class'=>'btn btn-outline-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $usuario['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
</div>
	</div>
</div>
