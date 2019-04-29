<div class="container">
<div class="profesionales index">
	<h2><?php echo __('Profesionales'); ?></h2>
		<a href="../profesionales/add" class="btn btn-success">Crear Profesional</a>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('rut'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($profesionales as $profesionale): ?>
	<tr>
		<td><?php echo h($profesionale['Profesionale']['id']); ?>&nbsp;</td>
		<td><?php echo h($profesionale['Profesionale']['rut']); ?>&nbsp;</td>
		<td><?php echo h($profesionale['Profesionale']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($profesionale['Profesionale']['apellidos']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($profesionale['Cargo']['nombre'], array('controller' => 'cargos', 'action' => 'view', $profesionale['Cargo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $profesionale['Profesionale']['id']), array('class'=>'btn btn-outline-primary')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $profesionale['Profesionale']['id']), array('class'=>'btn btn-outline-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $profesionale['Profesionale']['id']), array('class'=>'btn btn-outline-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $profesionale['Profesionale']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
		<a href="../profesionales/add" class="btn btn-success">Crear Profesional</a>
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
