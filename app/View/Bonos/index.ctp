<div class="container">
<div class="bonos index">
	<h2><?php echo __('Bonos'); ?></h2>
		<a href="../bonos/add" class="btn btn-success">Crear Bono</a>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('num_bono'); ?></th>
			<th><?php echo $this->Paginator->sort('seguro'); ?></th>
			<th><?php echo $this->Paginator->sort('fec_bono'); ?></th>
			<th><?php echo $this->Paginator->sort('atencion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('paciente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('profesional_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($bonos as $bono): ?>
	<tr>
		<td><?php echo h($bono['Bono']['id']); ?>&nbsp;</td>
		<td><?php echo h($bono['Bono']['num_bono']); ?>&nbsp;</td>
		<td><?php echo h($bono['Bono']['seguro']); ?>&nbsp;</td>
		<td><?php echo h($bono['Bono']['fec_bono']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bono['Atencione']['fec_atenciones'], array('controller' => 'atenciones', 'action' => 'view', $bono['Atencione']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bono['Paciente']['rut'], array('controller' => 'pacientes', 'action' => 'view', $bono['Paciente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bono['Profesionale']['rut'], array('controller' => 'profesionales', 'action' => 'view', $bono['Profesionale']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bono['Bono']['id']), array('class'=>'btn btn-outline-primary')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bono['Bono']['id']), array('class'=>'btn btn-outline-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bono['Bono']['id']), array('class'=>'btn btn-outline-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $bono['Bono']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
		<a href="../bonos/add" class="btn btn-success">Crear bono</a>
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