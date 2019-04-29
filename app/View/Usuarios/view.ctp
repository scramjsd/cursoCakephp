<div class="container-fluid">
 	<div class="row">
 		<div class="col-md-2"></div>
 		<div class="col-md-8">
		 <div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<table class="table table-striped">
		<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('User'); ?></td>
		<td>
			<?php echo h($usuario['Usuario']['user']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Pass'); ?></td>
		<td>
			<?php echo h($usuario['Usuario']['pass']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Foto'); ?></td>
		<td>
			<?php echo h($usuario['Usuario']['foto']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($usuario['Usuario']['created']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($usuario['Usuario']['modified']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Tipo Usuario'); ?></td>
		<td>
			<?php echo $this->Html->link($usuario['TipoUsuario']['nombre'], array('controller' => 'tipo_usuarios', 'action' => 'view', $usuario['TipoUsuario']['id'])); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Paciente'); ?></td>
		<td>
			<?php echo $this->Html->link($usuario['Paciente']['rut'], array('controller' => 'pacientes', 'action' => 'view', $usuario['Paciente']['id'])); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Profesionale'); ?></td>
		<td>
			<?php echo $this->Html->link($usuario['Profesionale']['rut'], array('controller' => 'profesionales', 'action' => 'view', $usuario['Profesionale']['id'])); ?>
			&nbsp;
		</td>
		</tr>
	</table>
			<br>
			<a href="../index" class="btn btn-warning">volver a ver los usuarios</a><br><br>
</div>
</div>
</div>
<div class="container">
<div class="related">
	<h3><?php echo __('Related Atenciones'); ?></h3>
	<?php if (!empty($usuario['Atencione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fec Atenciones'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Paciente Id'); ?></th>
		<th><?php echo __('Profesionale Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['Atencione'] as $atencione): ?>
		<tr>
			<td><?php echo $atencione['id']; ?></td>
			<td><?php echo $atencione['fec_atenciones']; ?></td>
			<td><?php echo $atencione['activo']; ?></td>
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
</div>
<div class="related">
	<h3><?php echo __('Related Bonos'); ?></h3>
	<?php if (!empty($usuario['Bono'])): ?>
	<table cellpadding = "0" cellspacing = "0">
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
	<?php foreach ($usuario['Bono'] as $bono): ?>
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
</div>

</div>