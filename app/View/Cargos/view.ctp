 <div class="container-fluid">
 	<div class="row">
 		<div class="col-md-2"></div>
 		<div class="col-md-8">
 			<div class="cargos view">
				<h2><?php echo __('Cargo'); ?></h2>
				<table class="table table-striped">
					<tr>
					<td><?php echo __('Id'); ?></td>
					<td>
						<?php echo h($cargo['Cargo']['id']); ?>
						&nbsp;
					</td>
					</tr>
					<tr>
					<td><?php echo __('Nombre'); ?></td>
					<td>
						<?php echo h($cargo['Cargo']['nombre']); ?>
						&nbsp;
					</td>
					</tr>
					<tr>
					<td><?php echo __('Descripcion'); ?></td>
					<td>
						<?php echo h($cargo['Cargo']['descripcion']); ?>
						&nbsp;
					</td>
					</tr>
					<tr>
					<td><?php echo __('Created'); ?></td>
					<td>
						<?php echo h($cargo['Cargo']['created']); ?>
						&nbsp;
					</td>
					</tr>
					<tr>
					<td><?php echo __('Modified'); ?></td>
					<td>
						<?php echo h($cargo['Cargo']['modified']); ?>
						&nbsp;
					</td>
					</tr>
					<tr>
					<td><?php echo __('Active'); ?></td>
					<td>
						<?php echo h($cargo['Cargo']['active']); ?>
						&nbsp;
					</td>
					</tr>
				</table>
			<br>
			<a href="../index" class="btn btn-warning">volver a ver los cargos</a>
			</div>
		</div>
 		<div class="col-md-2">
		</div>
	</div>
 </div>
<div class="container-fluid">
<div class="related">
	<h3><?php echo __('Related Profesionales'); ?></h3>
	<?php if (!empty($cargo['Profesionale'])): ?>
	<table cellpatding = "0" cellspacing = "0" class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Rut'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Fec Nac'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cargo['Profesionale'] as $profesionale): ?>
		<tr>
			<td><?php echo $profesionale['id']; ?></td>
			<td><?php echo $profesionale['rut']; ?></td>
			<td><?php echo $profesionale['nombres']; ?></td>
			<td><?php echo $profesionale['apellidos']; ?></td>
			<td><?php echo $profesionale['telefono']; ?></td>
			<td><?php echo $profesionale['email']; ?></td>
			<td><?php echo $profesionale['fec_nac']; ?></td>
			<td><?php echo $profesionale['activo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'profesionales', 'action' => 'view', $profesionale['id']), array('class'=>'btn btn-outline-primary')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'profesionales', 'action' => 'edit', $profesionale['id']), array('class'=>'btn btn-outline-success')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'profesionales', 'action' => 'delete', $profesionale['id']), array('class'=>'btn btn-outline-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $profesionale['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
</div>