<div class="container">
<div class="tipoUsuarios index">
	<h2><?php echo __('Tipo Usuarios'); ?></h2>
		<a href="../tipousuarios/add" class="btn btn-success">Crear tipo de usuario</a>
	<table cellpadding="0" cellspacing="0"  class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('activo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tipoUsuarios as $tipoUsuario): ?>
	<tr>
		<td><?php echo h($tipoUsuario['TipoUsuario']['id']); ?>&nbsp;</td>
		<td><?php echo h($tipoUsuario['TipoUsuario']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($tipoUsuario['TipoUsuario']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($tipoUsuario['TipoUsuario']['created']); ?>&nbsp;</td>
		<td><?php echo h($tipoUsuario['TipoUsuario']['modified']); ?>&nbsp;</td>
		<td><?php echo h($tipoUsuario['TipoUsuario']['activo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tipoUsuario['TipoUsuario']['id']), array('class'=>'btn btn-outline-primary')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tipoUsuario['TipoUsuario']['id']), array('class'=>'btn btn-outline-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tipoUsuario['TipoUsuario']['id']), array('class'=>'btn btn-outline-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $tipoUsuario['TipoUsuario']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
		<a href="../tipousuarios/add" class="btn btn-success">Crear tipo de usuario</a>
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
