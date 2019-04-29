<div class="container">
	<div class="cargos index">
		<h2><?php echo __('Cargos'); ?></h2>
		<a href="../cargos/add" class="btn btn-success">Crear cargos</a>
		<table cellpadding="0" cellspacing="0" class="table table-striped">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
				<th><?php echo $this->Paginator->sort('created'); ?></th>
				<th><?php echo $this->Paginator->sort('modified'); ?></th>
				<th><?php echo $this->Paginator->sort('active'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($cargos as $cargo): ?>
		<tr>
			<td><?php echo h($cargo['Cargo']['id']); ?>&nbsp;</td>
			<td><?php echo h($cargo['Cargo']['nombre']); ?>&nbsp;</td>
			<td><?php echo h($cargo['Cargo']['descripcion']); ?>&nbsp;</td>
			<td><?php echo h($cargo['Cargo']['created']); ?>&nbsp;</td>
			<td><?php echo h($cargo['Cargo']['modified']); ?>&nbsp;</td>
			<td><?php echo h($cargo['Cargo']['active']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $cargo['Cargo']['id']), array('class'=>'btn btn-outline-primary')); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cargo['Cargo']['id']), array('class'=>'btn btn-outline-success')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cargo['Cargo']['id']), array('class'=>'btn btn-outline-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $cargo['Cargo']['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>
		<p>
		<a href="../cargos/add" class="btn btn-success">Crear cargos</a>
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