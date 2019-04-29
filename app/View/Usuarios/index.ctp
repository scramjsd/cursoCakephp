<div class="container">
<div class="usuarios index">
	<h2><?php echo __('Usuarios'); ?></h2>
		<a href="../usuarios/add" class="btn btn-success">Crear usuario</a>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('paciente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('profesionale_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['Usuario']['id']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['user']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($usuario['TipoUsuario']['nombre'], array('controller' => 'tipo_usuarios', 'action' => 'view', $usuario['TipoUsuario']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($usuario['Paciente']['rut'], array('controller' => 'pacientes', 'action' => 'view', $usuario['Paciente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($usuario['Profesionale']['rut'], array('controller' => 'profesionales', 'action' => 'view', $usuario['Profesionale']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usuario['Usuario']['id']), array('class'=>'btn btn-outline-primary')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['Usuario']['id']), array('class'=>'btn btn-outline-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuario['Usuario']['id']), array('class'=>'btn btn-outline-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $usuario['Usuario']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
		<a href="../usuarios/add" class="btn btn-success">Crear usuario</a>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<div class="btn-group" role="group" aria-label="Basic example">
				<?php
					echo '<button type="button" class="btn btn-secondary">'.$this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')).'</button>';
					echo '<button type="button" class="btn btn-secondary">'.$this->Paginator->numbers(array('separator' => '')).'</button>';
					echo '<button type="button" class="btn btn-secondary">'.$this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')).'</button>';
				?>
			</div>
	</div>
</div>
</div>
