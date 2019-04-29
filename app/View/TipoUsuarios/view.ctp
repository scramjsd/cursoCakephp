<div class="container-fluid">
 	<div class="row">
 		<div class="col-md-2"></div>
 		<div class="col-md-8">
<div class="tipoUsuarios view">
<h2><?php echo __('Tipo Usuario'); ?></h2>
	<table class="table table-striped">
		<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($tipoUsuario['TipoUsuario']['id']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Nombre'); ?></td>
		<td>
			<?php echo h($tipoUsuario['TipoUsuario']['nombre']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Descripcion'); ?></td>
		<td>
			<?php echo h($tipoUsuario['TipoUsuario']['descripcion']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($tipoUsuario['TipoUsuario']['created']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($tipoUsuario['TipoUsuario']['modified']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td><?php echo __('Activo'); ?></td>
		<td>
			<?php echo h($tipoUsuario['TipoUsuario']['activo']); ?>
			&nbsp;
		</td>
		</tr>
	</table>
			<br>
			<a href="../index" class="btn btn-warning">Volver a ver los tipos de usuario"</a>
</div>
</div>
 		<div class="col-md-2"></div>
	</div>
 </div>
 <div class="container-fluid">
<div class="related">
	<h3><?php echo __('Related Usuarios'); ?></h3>
	<?php if (!empty($tipoUsuario['Usuario'])): ?>
	<table cellpatding = "0" cellspacing = "0" class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User'); ?></th>
		<th><?php echo __('Pass'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Tipo Usuario Id'); ?></th>
		<th><?php echo __('Paciente Id'); ?></th>
		<th><?php echo __('Profesionale Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipoUsuario['Usuario'] as $usuario): ?>
		<tr>
			<td><?php echo $usuario['id']; ?></td>
			<td><?php echo $usuario['user']; ?></td>
			<td><?php echo $usuario['pass']; ?></td>
			<td><?php echo $usuario['foto']; ?></td>
			<td><?php echo $usuario['tipo_usuario_id']; ?></td>
			<td><?php echo $usuario['paciente_id']; ?></td>
			<td><?php echo $usuario['profesionale_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), array('confirm' => __('Are you sure you want to delete # %s?', $usuario['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>

 </div>