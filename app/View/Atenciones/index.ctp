<div class="container">
<div class="atenciones index">
	<h2><?php echo __('Atenciones'); ?></h2>
		<a href="../atenciones/add" class="btn btn-success">Crear atencion</a>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fec_atenciones'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_cancelacion'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('paciente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('profesional_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($atenciones as $atencione): ?>
	<tr>
		<td><?php echo h($atencione['Atencione']['id']); ?>&nbsp;</td>
		<td><?php echo h($atencione['Atencione']['fec_atenciones']); ?>&nbsp;</td>
		<td><?php echo h($atencione['Atencione']['estado_cancelacion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($atencione['Usuario']['user'], array('controller' => 'usuarios', 'action' => 'view', $atencione['Usuario']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($atencione['Paciente']['rut'], array('controller' => 'pacientes', 'action' => 'view', $atencione['Paciente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($atencione['Profesionale']['rut'], array('controller' => 'profesionales', 'action' => 'view', $atencione['Profesionale']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $atencione['Atencione']['id']), array('class'=>'btn btn-outline-primary')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $atencione['Atencione']['id']), array('class'=>'btn btn-outline-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $atencione['Atencione']['id']), array('class'=>'btn btn-outline-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $atencione['Atencione']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
		<a href="../atenciones/add" class="btn btn-success">Crear atencion</a>
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
